# cliwork

## Usage:

./cliwork count bypricerange from=100 to=300 input="source.txt"

./cliwork count byvendor vendor=35 input="source.txt"

* It's reading from a local file, readers should be extended.

## Basis

The application uses App namespace as a commands launcher. Controllers inside are the subcommands. All of them can receive n different vars and process them.
