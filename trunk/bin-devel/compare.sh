#!/bin/sh

# generate the keys for one of them
TMP="/tmp/"

if [ $# -lt 2 ]; then
	echo "You must provide two locales to compare"
	exit -1
fi

# check if the files exist
FILE_1="locale_"$1".php";
FILE_2="locale_"$2".php";

if [ \! -e $FILE_1 ]; then
	echo "$FILE_1 does not exist"
	exit -1
fi


if [ \! -e $FILE_2 ]; then
	echo "$FILE_2 does not exist"
	exit -1
fi

# files exist so we can compare
TMPFILE_1=$TMP$FILE_1".tmp"
TMPFILE_2=$TMP$FILE_2".tmp"

./chklocale.py $FILE_1 --keys > $TMPFILE_1
./chklocale.py $FILE_2 --keys > $TMPFILE_2

diff $TMPFILE_1 $TMPFILE_2
