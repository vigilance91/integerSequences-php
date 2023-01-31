# [vs\intSeq]()&trade;

# Copyright &copy; [Tyler R. Drury](https://vigilance91.github.io/) 19-07-2020, All Rights Reserved

## Proudly [Canadian](https://www.canada.ca/en.html), made in [Ontario](https://www.ontario.ca/)


---

**vs\intSeq.phar** is a PHP archive which contains Object oriented APIs
for the convenient representation, calculation and extension
of common integer sequences in PHP, including:

* Factorials
* Prime numbers
* Horadam numbers
* Padovan numbers
* Geometric numbers
* Pascal numbers
* Hofstadter numbers


Developed and maintained by Tyler R. Drury.


---

## License

vs_intSeq.phar is released under the modified Apache 2.0 License,
typical of all VS products.

See [LICENSE][7] file for details.

---

## Installing

### via composer
```
>composer require vs/intSeq
```
### via curl
```
>curl ftps://vs.ca/downloads/vs_intSeq.phar
```
### via github
```
>git ...
```

### Or simply

* visit the offical
[vs\intSeq&trade; PHAR](https://vs.ca/downloads/vs_intSeq.phar) site
* download the latest stable version via **FTPS**
[here](ftps://vs.ca/downloads/vs_intSeq.phar)
* clone the public github repository [here]()

Placing the .phar where desired in a project's directory structure

---

## CLI Use

Please visit [this page]() for the CLI Appliction documentation


---


## Front-End Use

For use in browsers, the external SAPI may be used in JavaScript to make AJAX requests.

For convenience, in this example jQuery is used.


````
$.get(
    '...intSeq\\fibonnacci.php?N=20',
    function(obj){
        console.log(obj.toString());
    }
);
````


or alternately if a constant series is required when the webpage is served,
replace the html pre code tags with script tags.


````
<?php
require_once 'integerSequence.phar/meta.php';

use \integerSequence\Fibonacci as fib;
?>
var f = <?php
echo json_encode(fib::series(20));
?>;

console.log(f);
````

There are also native Javascript APIs (supporting ES5 and ES6) as externally hosted Javascript,
or available for download [here]() or as [GitHub repositories](), for local hosting.

---


## Back-End Use

For server developers, the most current stable Source Code can be found at [Vigil Studios](),
or accessed through the repo on [GitHub](intSeq-php), if you wish to contribute.

After installing the integerSequence directory on your server,
scripts may access the namespace and its contents in the following manner.


````
require_once 'phar://C:\integerSequence.phar/meta.php';

use \integerSequence\Horadam as Horadam,
    \integerSequence\Fibonacci as fib,
    \integerSequence\getPrimes;

$p = getPrimes(1000) //calculate all primes up to 1000
$h = Horadam(2,3,1,2);    //unnamed Horadam sequence
$s = $h->series(20);
$f = fib::series(20);

echo json_encode(
    'primes'=>$p,
    'horadam'=>$s,
    'fib'=>$f
);
````


This script will return a JSON encoded object containing all prime numbers up to 1000,
the first 20 elements of an arbitrary, unnamed Horadam sequence,
along with the first 20 elements of the Fibonacci sequence.

Or, as an alternative, if you wish to access the API externally from the VS host,
replace the local include with the following:

````
require_once 'phar://https://vs.ca/SAPIs/integerSequence.phar/meta.php';
````

In addition to PHP Archives, Integer Sequences is available as [C++]() or [Python]() CGI scripts (32 and 64 bit).


---


## Platforms Supported

* PHP [5.6+]()
* PHP [7.4+]()
* PHP [8.1+]()


---

## Author, Owner and Primary Developer

* Tyler R. Drury

## Additional Contributors

* TBD

---


## Related Projects

Similar or related projects for various platforms can also be found here

### Libraries/Archives

* [IntegerSequencesX86.lib]()  a C++ static compiled library for generating common sequences of integers
* [IntegerSequencesX64.lib]()  a C++ static compiled library for generating common sequences of integers
* [IntegerSequences5JS]()  an ECMA5 compatible Javascript library for generating common sequences of integers for web browsers
* [IntegerSequences6JS]()  an ECMA6 compatible Javascript library for generating common sequences of integers for web browsers
* [IntegerSequencesNodeJS]()  a NodeJS library for generating common sequences of integers
* [IntegerSequences.py](https://pypi.org/project/integerSequence/)  a Pure Python Package for generating common sequences of integers


### Applications/Games

* [pkr_cpp17x86]() - a 32 bit compiled C++17 compatible console poker application (binary)
* [pkr_cpp17x64]() - a 64 bit compiled C++17 compatible console poker application (binary)
* [pkr_py36]()  - a pure Python console poker application
* [pkr_js]() - a Poker Web application in Javascript
* [pkr_php56]() - a php 5.6 and mySQL web server Poker application and REST API  PHAR
* [pkr_php74]() - a php 7.4 compatible web server Poker application PHAR


---

## Additional References and Resources

* IntegerSequence [API Reference]() for developers
* The [On-line Encyclopedia of Integer Sequences](https://oeis.org)


---
    
## Acknowledgments

* TBD