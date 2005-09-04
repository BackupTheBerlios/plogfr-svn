#!/bin/sh

#
# Script to generate distribution builds of pLog
#
# (c) 27-08-2004, the pLog Team
#
#
# Requires two parameters: the name of the output package and the
# CVS tag label that will be used to fetch the contents of the build. Therefore,
# contents must be tagged _before_ running this script. 
# The same CVS label must be used for both the plog_devel and plog_docs module.
#

#
# array with the files that we are going to remove before
# making the package... Wildcards, complete paths, whatever
# can be used here
#
TOREMOVE="include_files release/ templates/grey-sf/ templates/default bin-devel/ docs-devel/ Doxyfile.userdocs class/database/adodb/drivers/adodb-access.inc.php class/database/adodb/drivers/adodb-ado_access.inc.php class/database/adodb/drivers/adodb-ado_mssql.inc.php class/database/adodb/drivers/adodb-borland_ibase.inc.php class/database/adodb/drivers/adodb-csv.inc.php class/database/adodb/drivers/adodb-db2.inc.php class/database/adodb/drivers/adodb-fbsql.inc.php class/database/adodb/drivers/adodb-firebird.inc.php class/database/adodb/drivers/adodb-ibase.inc.php class/database/adodb/drivers/adodb-informix.inc.php class/database/adodb/drivers/adodb-informix72.inc.php class/database/adodb/drivers/adodb-mssql.inc.php class/database/adodb/drivers/adodb-mssqlpo.inc.php class/database/adodb/drivers/adodb-oci8.inc.php class/database/adodb/drivers/adodb-oci8po.inc.php class/database/adodb/drivers/adodb-oci805.inc.php class/database/adodb/drivers/adodb-odbc_mssql.inc.php class/database/adodb/drivers/adodb-odbc_oracle.inc.php class/database/adodb/drivers/adodb-odbc.inc.php class/database/adodb/drivers/adodb-oracle.inc.php class/database/adodb/drivers/adodb-postgres.inc.php class/database/adodb/drivers/adodb-postgres7.inc.php class/database/adodb/drivers/adodb-postgres64.inc.php class/database/adodb/drivers/adodb-proxy.inc.php class/database/adodb/drivers/adodb-sapdb.inc.php class/database/adodb/drivers/adodb-sqlanywhere.inc.php class/database/adodb/drivers/adodb-sqlite.inc.php class/database/adodb/drivers/adodb-sybase.inc.php class/database/adodb/drivers/adodb-vfp.inc.php class/database/adodb/lang/adodb-ca.inc.php class/database/adodb/lang/adodb-cn.inc.php class/database/adodb/lang/adodb-cz.inc.php class/database/adodb/lang/adodb-de.inc.php class/database/adodb/lang/adodb-es.inc.php class/database/adodb/lang/adodb-fr.inc.php class/database/adodb/lang/adodb-it.inc.php class/database/adodb/lang/adodb-pt-br.inc.php class/database/adodb/lang/adodb-ru1251.inc.php class/database/adodb/lang/adodb-sv.inc.php class/database/adodb/perf/perf-db2.inc.php class/database/adodb/perf/perf-informix.inc.php class/database/adodb/perf/perf-mssql.inc.php class/database/adodb/perf/perf-oci8.inc.php class/database/adodb/perf/perf-postgres.inc.php class/database/adodb/session/ class/gallery/getid3/module.archive.rar.php class/gallery/getid3/module.archive.szip.php class/gallery/getid3/module.audio-video.bink.php class/gallery/getid3/module.audio-video.matroska.php class/gallery/getid3/module.audio-video.nsv.php class/gallery/getid3/module.audio.avr.php class/gallery/getid3/module.audio.bonk.php class/gallery/getid3/module.audio.la.php class/gallery/getid3/module.audio.lpac.php class/gallery/getid3/module.audio.monkey.php class/gallery/getid3/module.audio.optimfrog.php class/gallery/getid3/module.audio.rkau.php class/gallery/getid3/module.audio.shorten.php class/gallery/getid3/module.audio.tta.php class/gallery/getid3/module.audio.voc.php class/gallery/getid3/module.audio.vqf.php class/gallery/getid3/module.graphic.bmp.php class/gallery/getid3/module.graphpc.pcd.php class/gallery/getid3/module.misc.exe.php class/gallery/getid3/module.misc.iso.php"

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
	echo "Usage: build-svn2.sh label package-name"
	echo ""
	echo "If package-name is omitted, the name will plog-devel-current_date"
	exit -1
fi

SVNTAG=$1

# if there was no package name parameter, then build one using the current date
if [ $# -eq 1 ]; then
    PACKAGENAME=plog-devel-`date +%Y%m%d`
else
    PACKAGENAME=$2
fi

message "Using $PACKAGENAME as the package name"
WORKDIR=$PACKAGENAME
BUILDLABEL=$PACKAGENAME

# call the cvs command with the correct parameters
message "Exporting the source code..."
svn export /Users/oscar/Sites/plog/plog $WORKDIR

if [ $? -eq 1 ]; then
    echo "There was an error fetching the source code. Please try again."
    exit 1
fi

# create the temp folder and give proper permissions to it
message "Creating the temporary folders and setting permissions to 777..."
if [ \! -d $WORKDIR/tmp ]; then
	mkdir $WORKDIR/tmp
fi
chmod 777 $WORKDIR/tmp

# create the gallery/ folder and make sure that it has the right permissions
message "Creating the gallery/ folder and setting permissions to 777..."
if [ \! -d $WORKDIR/gallery ]; then
	mkdir $WORKDIR/gallery
fi
chmod 777 $WORKDIR/gallery

# copy the generic config file and remove the dist/ folder since it is not needed
message "Copying the generic config.properties.file..."
cp -f $WORKDIR/release/config.properties.php.dist $WORKDIR/config/config.properties.php
rm -rf $WORKDIR/dist

# finally, update the version.php file
message "Updating the version.php file..."
echo "<?php" > $WORKDIR/version.php
echo "\$version = \"$CVSTAG\";" >> $WORKDIR/version.php
echo "?>" >> $WORKDIR/version.php

# remove all the annoying CVS/ folders
message "Removing unneeded SVN folders..."
find $WORKDIR/ -name ".svn" -exec rm -rf '{}' \; >& /dev/null

# and remove all unnecessary files
message "Removing unnecessary files...";
for i in $TOREMOVE
do
  message "  -- removing $i"
  rm -rf $WORKDIR/$i
done

# and create the tar.gz and .tar.bz2 packages
message "Creating .tar.gz package..."
tar czvf $BUILDLABEL.tar.gz $WORKDIR > /dev/null
message "Creating .tar.bz2 package..."
tar cjvf $BUILDLABEL.tar.bz2 $WORKDIR > /dev/null

# clean up the temporary folders
message "Cleaning up..."
cleanup_exit -1

# done!
message "Done!"
