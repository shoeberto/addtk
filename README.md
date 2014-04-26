addtk
=====

ag-dev debugging toolkit (pronounced "attic")

follow the comments in config.php to configure your deployment.

open addtk.php and copy-paste up to 10 captured Ajax requests into the $test\_str[n] variables, and set $varnum to target the appropriate one.

access addtk.php via your browser to have it run through whatever Ajax request you want to debug. you can throw the following functions into the files you're debugging to get more useful information:

functions:
+ agbreak     - halts execution and prints a stacktrace.
+ agbacktrace - prints a stacktrace
+ agvar       - pretty prints a variable with a label
+ aglint      - stub
+ agassert    - stub
+ agprint     - stub

hit me up if you have any comments on how to make this more useful. I am a formally trained c++ dev who is barely literate in php so this is probably hideous to any sensible web dev.
