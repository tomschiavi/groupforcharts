# Group for charts

<a href="https://packagist.org/packages/tsch/groupforcharts"><img src="https://img.shields.io/packagist/dt/tsch/groupforcharts" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/tsch/groupforcharts"><img src="https://img.shields.io/packagist/v/tsch/groupforcharts" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/tsch/groupforcharts"><img src="https://img.shields.io/packagist/l/tsch/groupforcharts" alt="License"></a>

## Introduction

Group for charts generate an array sorted by months for the current year for your model.

## Official Documentation

### Installation

```bash
composer require tsch/groupforcharts
```

Once the `tsch/groupforcharts` package has been installed, you can use it whenever your want.

### Examples

#### Grouping by month

```php
use TSCH\GroupForCharts\GroupForCharts;

GroupForCharts::groupByMonth($model)

// Example result: [0, 2, 3, 4, 5, 6, 7, 8, 9, 2, 3, 6]
```

## License

Group for charts is open-sourced software licensed under the [MIT license](LICENSE.md).
