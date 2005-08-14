#!/bin/sh
for filename in `find ./ -name "*.php"`
do
  `perl -p -i -e 's/_debug\(/\\$this->log->debug\(/g' ${filename}`
done
