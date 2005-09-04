#!/bin/sh

# where to find the svn repository
SVNSERVER="http://devel.plogworld.net"
SVNREPO="/svn/plog/plog"

# check paramters
if [ $# -ne 2 ]; then
	echo "Creates a folder with the folders that were added or updated when comparing"
	echo "two subversion folders or branches"
	echo " "
	echo "Usage: $0 branch1 branch2"
        echo " "
	echo "Where branch1 and branch2 are two different branches/folders from the repository"
	echo " "
	echo "Example:"
	echo " "
	echo "    $0 tags/plog-1.0.1 branches/plog-1.0.2"
	exit -1
fi

# parameters with the branches
BRANCH1=$1
BRANCH2=$2

# create our temporary folder
WORKFOLDER=`date +%Y%m%d%H%M`
DESTFOLDER="destination"
mkdir $WORKFOLDER
mkdir $DESTFOLDER

# checkout the first branch
echo "Checking out $BRANCH1..."
svn checkout $SVNSERVER$SVNREPO/$BRANCH1 $WORKFOLDER > /dev/null
# switch to the second one
cd $WORKFOLDER
echo "Switching to $BRANCH2..."
svn switch $SVNSERVER$SVNREPO/$BRANCH2 > files
cd ..

echo "Copying new or updated files..."
for i in `cat $WORKFOLDER/files|grep [^UA]|grep -v revision|awk '{print $2}'`
do
	echo Keeping: $i
	FOLDER=`dirname $i`
	mkdir -p $DESTFOLDER/$FOLDER
	cp $WORKFOLDER/$i $DESTFOLDER/$FOLDER
done

# remove temporary folders
rm -rf $WORKFOLDER

echo "Done! Output available under the $DESTFOLDER/ folder"
