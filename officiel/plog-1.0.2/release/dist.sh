#!/bin/sh

files=`cat include_files`
timestamp=`date +%Y%m%d`
destdir="plog-devel-$timestamp"

if [ "$1" == "iwebland" ]; then
	destdir=$destdir"-iwebland"
fi

echo "Creating distribution folder..."
mkdir $destdir

echo "Creating version...";
echo "<?php" > version.php
echo "\$version = $timestamp;" >> version.php
echo "?>" >> version.php

for file in $files
do
    echo Adding: $file
    cp -rf $file $destdir
done


echo "Copying configuration files..."
cp dist/config.properties.php.dist $destdir/config/config.properties.php

echo "Creating temp folder...";
mkdir $destdir/tmp
chmod 757 $destdir/tmp

echo "** Process complete **"
