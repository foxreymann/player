# run test

phpunit high-card.php

# task

## methods

getAll()
add(player, subarray, word)
deleteWord(player, subarray, word)
deletePlayer(player)
deleteSubarray(player, suarray)
save()
load()

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
