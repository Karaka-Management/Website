# Assertion / Test Ratio

For a long time I was unhappy with the quality of the PHP tests in terms of how the tests where written. Some of the tests were bad in terms of structure, some resultet in excessive coverage reports, others didn't really test what they were supposed to test and so forth.

Very often a single test case contained 10+ assertions for multiple functions and purposes. As a result a lot of test suites got changed so that most of the unit tests have their own test case instead of chaining multiple unit tests after one another. This means for every couple of assitions which were supposed to test a unit we created a separate test case. By doing so we also discovered a lot of improvements in our tests and missing test cases despite a very high (sometimes even 100%) code coverage.

For the tests we didn't limit the coverage report. This means if a test (especially integration tests) executed many underlying functions and large code path, the code coverage was pretty large giving a wrong impression about the actual coverage situation. Just because the code got executed it wasn't necessarily tested. By implementing `@covers` tags in our tests we try to limit the expected coverage much more leading to a much clearer indication of which code paths actually got **tested** and not only executed.

There are still many tests to be checked and improved but we can already see a big improvement in the assertions per test ratio which got reduced from 5+ to 2+ on average. Maybe we will be able to reduce it momentarily to 1+. However, it is expected that this average ratio will probably be around 3 assertions per test since we will have many tests where with a lot of assertions where it doesn't make much sense to split them up just to have a nicer statistic (e.g. enum assertions and CRUD mapper tests).

![CS and Static Analysis](app/tpl/posts/img/20191126_test_assertion_ratio.png)
