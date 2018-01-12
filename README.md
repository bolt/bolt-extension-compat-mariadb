MariaDB 10.2 Fixes
==================

## Important Notice!

**NOTE:** This extension's sole purpose is to work around problems with DBAL
coping with MariaDB 10.2.6+ and should only be installed as a temporary measure
until the problems are fixed upstream.

**EXTRA NOTE FOR PEOPLE WHO CAN'T READ CODE AND LACK READING COMPREHENSION SKILLS:** 
This extension does not properly address issues with MariaDB 10.2.6+, and is 
not intended to do so. It will only prevent the update notice being show, it
will not prevent sever performance degradation and it **will** prevent some 
**valid** schema updates!
