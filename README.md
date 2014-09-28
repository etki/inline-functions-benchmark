# Oh hi again

This is a very simple project i made when i was interested if PHP can use
C-style inline functions patching. The results i got showed improvement from
10% to 20% (approximately, tested using [Athletic][athletic] benchmarking
framework) in three different cases on PHP 5.5.9 and Lubuntu x64 14.04.1. You
can measure it yourself:

  [athletic]: https://packagist.org/packages/athletic/athletic

# Usage

1. `git clone https://github.com/etki/inline-functions-benchmark.git`
2. `cd inline-functions-benchmark`
3. `composer install`
4. `vendor/bin/athletic -p benchmarks -b vendor/autoload.php`
5. Watch results, add your own test cases
6. Don't forget it's synthetic