# how to use

````
<?php
$players = new Players
````


# run test

phpunit high-card.php

# task

## methods

new Players('./players.dat')
getAll()
add(player, subarray, word)
delete(player, subarray, word)
save()

yaml_emit_file
yaml_parse_file

## questions

always grow? no
add a word twice subarray? no
delete a word? yes

## array

$players =

Joe Bloggs

before = [a, b, c]
after = [e, d]

Before words
[said, she said, add said]

After words
[He said]

<?php

$companies = [
  'Next' => [
    'before' => ['b1','b2'],
    'after' => ['a1', 'a2']
  ],
  'Tesco' => [
    'before' => ['tb1','tb2'],
    'after' => ['ta1', 'ta2']
  ]
];

var_dump($companies);
