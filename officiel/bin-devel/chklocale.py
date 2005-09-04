#!/usr/bin/python

import sys
import string
import re

class mySys:
	argc = 0
	argv = ""
	def __init__(self, args):
		self.argc = len(args)
		self.argv = args
	def isArg(self, findArg):
		for arg in self.argv:
			if( arg == findArg ):
				return 1

		else:
			return 0


		

if len( sys.argv ) < 2:
	print "Argument missing"
	sys.exit( -1 );

# check for the parameter
params   = mySys( sys.argv )
keysOnly = params.isArg( "--keys" )

# open the file
localeFile = open( sys.argv[1], 'r' )

# and compile the regexp
#pattern = "\$messages\[\"(.+)\"] *= *\"(.+)\";"
pattern = "\$messages\[\"(.+)\"] *= \"(.*)\n"
regExp = re.compile( pattern, re.IGNORECASE|re.MULTILINE|re.DOTALL )

# output list
result = []
# and now loop through the lines of the file checking which ones match
# the regular experession given above
for line in localeFile.readlines():
	grp = regExp.search( line )
	if( grp ):
		if( keysOnly ):
			result.append( grp.group(1))
		else:
			item = grp.group(1) + " - " + grp.group(2)
			result.append( item )

# sort the output list
result.sort()
# and print it, since calling "print result" would print something
# really awful ;)
for item in result:
	print item
