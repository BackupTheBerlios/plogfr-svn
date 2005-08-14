#!/bin/sh

#
# server and repository path
#
SVNSERVER=http://devel.plogworld.net
SVNREPO=/svn/plog/templates/trunk

#
# folders that should not be included. Please add here any template set that should be removed from
# the final package!
#
DONOTINCLUDE="unported/"

#
# helper functions to print things in different colors
#
NOCOLOR='\e[0m'
message()
{
 echo -e "\033[01;32m$*$NOCOLOR"
}

warning()
{
 echo -e "\033[01;33m$*$NOCOLOR"
}

error()
{
 echo -e "\033[01;31m$*$NOCOLOR"
}

cleanup_exit()
{
	rm -rf $WORKDIR
	rm -rf $WORKDIR-docs
	exit $1
}

# check parameters
if [ $# -lt 1 ]; then
    echo "Makes a build off the latest SVN source code and packages it"
    echo ""
	echo "Usage: build-templates.sh label package-name"
	echo ""
	echo "If package-name is omitted, the name will plog-templates-current_date"
	exit -1
fi

SVNTAG=$1

# if there was no package name parameter, then build one using the current date
if [ $# -eq 1 ]; then
    PACKAGENAME=plog-templates-`date +%Y%m%d`
else
    PACKAGENAME=$2
fi

message "Using $PACKAGENAME as the package name"
WORKDIR=$PACKAGENAME
BUILDLABEL=$PACKAGENAME

# call the cvs command with the correct parameters
message "Fetching the templates using $SVNTAG label..."
svn checkout $SVNSERVER$SVNREPO -r $SVNTAG $WORKDIR

if [ $? -eq 1 ]; then
    echo "There was an error fetching the source code. Please try again."
    exit 1
fi

# remove all the annoying SVN/ folders
message "Removing unneeded SVN folders..."
find $WORKDIR/ -name ".svn" -exec rm -rf '{}' \; >& /dev/null

# and remove all unnecessary files
message "Removing unnecessary files...";
for i in $DONOTINCLUDE
do
  message "  -- removing $i"
  rm -rf $WORKDIR/$i
done

# and create the tar.gz and .tar.bz2 packages
message "Creating .tar.gz package..."
tar czvf $BUILDLABEL.tar.gz $WORKDIR > /dev/null
message "Creating .tar.bz2 package..."
tar cjvf $BUILDLABEL.tar.bz2 $WORKDIR > /dev/null

# remove all the annoying CVS/ folders
message "Removing unneeded folders..."
find $WORKDIR/ -name ".svn" -exec rm -rf '{}' \; >& /dev/null
find $WORKDIR/ -name ".DS_Store" -exec rm -rf '{}' \; >& /dev/null

message "Done!"

cleanup_exit -1
