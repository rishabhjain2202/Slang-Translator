################################################################
## To input a string of message through user(Case-Insensitive)##
## and convert it into its description.                       ##
## ILLUSTRATION:                                              ##
## If the user input is:                                      ##
## "d rsrch wrk is dn in TCC"                                 ##
## The output should be:                                      ##
## "The Research work is done in Testing and Consultancy cell"##
################################################################

                                             
#!/bin/sh
echo
echo Content-type: text/html
echo
echo '<html> <head> <title> CGI script</title> </head> <body>'
echo 
sed -f slang_dictionary message.txt > display.txt  
echo 
echo
