# Integer Sequences-php
# Copyright (C) June 2016-present, Tyler R. Drury. All Rights Reserved.

----

This project contains php scripts which can be accessed world wide on a PHP server,
for the inclusion in front or back end website development,
allowing for the convenient representation and calculation of common integer sequences, including

* Factorials
* Prime numbers
* Horadam numbers
* Polygonal numbers
* Pascal numbers
* Hofstadter numbers


Developed and maintained by Tyler R. Drury,

---

## Platforms Supported

* PHP 5.6+


---

## Primary Developer

* Tyler R. Drury

## Additional Contributors

---


## Use

For front-end use in browsers, please use JavaScript to make AJAX requests.

*note*-for convenience jQuery is used in the example.

~~~~
$.get(
    '...intSeq\\fibonnacci.php?N=20',
    function(obj){console.log(obj.toString());}
);
~~~~

or alternately if a constant series is required when the webpage is served,
replacing the html pre code tags with script tags.

~~~~
<pre><code>
<?php
require_once 'integerSequence.php';

use integerSequence\Fibonacci as fib;
?>
var f = <?php echo json_encode(fib::series(20));?>;

console.log(f);
</code></pre>
~~~~

For back-end developers, the most current stable Source Code can be found [here](),
or for developers whom wish to contribute,
through the GitHub repo [here](https://github.com/vigilance91/integerSequences-php).

After installing the integerSequence directory on your server,
scripts may access the namespace and its contents in the following manner.

~~~~
require_once 'integerSequence.php';

use integerSequence\Horadam as Horadam;
use integerSequence\Fibonacci as fib;
use integerSequence\getPrimes;

$p = getPrimes(1000) //calculate all primes up to 1000
$h = Horadam(2,3,1,2);    //unnamed Horadam sequence
$s = $h->series(20);
$f = fib::series(20);

echo json_encode(
    'primes'=>$p,
    'horadam'=>$s,
    'fib'=>$f
);
~~~~

This script will return a JSON encoded object containing all prime numbers up to 1000,
the first 20 elements of an arbitrary, unnamed Horadam sequence,
along with the first 20 elements of the Fibonacci sequence.

---

## Related Projects

Similar or related projects for various platforms can also be found here

### Libraries

* [IntegerSequences-cpp](https://github.com/vigilance91/integerSequences-cpp)  a compiled C++17 compatible library for generating common sequences of integers
* [IntegerSequences-js](https://github.com/vigilance91/integerSequences-js)  a Javascript library for generating common sequences of integers for web browsers
* [IntegerSequences-py](https://github.com/vigilance91/integerSequences-py)  a Pure Python Package for generating common sequences of integers


---

## Additional On-line References and Resources

* [PHP IntegerSequence Reference](https://vigilance91.github.io/integerSequences-php/index.html)
* The [On-line Encyclopaedia of Integer Sequences](https://oeis.org)


---
    
## Acknowledgements

* [Neil Sloane](http://neilsloane.com/), founder of the Online Encyclopaedia of Integer Sequences
