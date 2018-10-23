# Not Fancy DWN Calc

DWN stand for "Daily Water Needs".
<br>
This application will calculate your daily water needs based on your body condition.
- Age
- Body Height
- Body Weight
- Gender
- Activity

## Built using

- Lumen 5.7
- Bootstrap 4

## NOTE

How to serve this app
```
php -S localhost:8000 -t public
```

Here are the formula to create your own dwn-calc

### Main Calculation
```php
$result = ($formula1 + $formula2 + $formula3 + $formula4) / 4;
$result = round($result / 1000, 1);         //convert to Liter
```

### Formula1
```php
if($param['age'] < 17) {
  switch ($param['weight']) {
    case $param['weight'] <= 10:
      $formula1 = $param['weight'] * 100;
      break;

    case $param['weight'] < 21:
      $formula1 = 1000 + 50 * (20 - $param['weight']);
      break;

    case $param['weight'] < 71:
      $formula1 = 1500 + 20 * (70 - $param['weight']);
      break;

    default:
      $formula1 = 50 * $param['weight'];
      break;
  }
} else {
  $formula1 = 50 * $param['weight'];
}
```

### Formula2
```php
if($param['gender'] = 'male') {
  $formula2 = (57 / 100) * $param['weight'];
} else {
  $formula2 = (55 / 100) * $param['weight'];
}
```

### Formula3
```php
if($param['gender'] = 'male') {
  switch ($param['activity']) {
    case 'heavy':
      $pwd = 2.10;
      break;

    case 'medium':
      $pwd = 1.76;
      break;

    case 'light':
      $pwd = 1.56;
      break;

    default:
      $pwd = 2.10;
      break;
  }

  $formula3 = (
    66.5 +
    (13.7 * $param['weight']) +
    (5.0 * $param['height']) -
    (6.8 * $param['age'])
  ) * $pwd;
} else {
  switch ($param['activity']) {
    case 'heavy':
      $pwd = 2.00;
      break;

    case 'medium':
      $pwd = 1.70;
      break;

    case 'light':
      $pwd = 1.55;
      break;

    default:
      $pwd = 2.00;
      break;
  }

  $formula3 = (
    65.5 +
    (9.6 * $param['weight']) +
    (1.8 * $param['height']) -
    (4.7 * $param['age'])
  ) * $pwd;
}
```

### Formula4
```php
if($param['age'] < 17) {
  switch ($param['weight']) {
    case $param['weight'] <= 10:
      $formula4 = $param['weight'] * 100;
      break;

    case $param['weight'] < 21:
      $formula4 = 1000 + 50 * ($param['weight'] - 10);
      break;

    case $param['weight'] < 71:
      $formula4 = 1500 + 25 * ($param['weight'] - 20);
      break;

    default:
      $formula4 = 50 * $param['weight'];
      break;
  }
} else {
  $formula4 = 50 * $param['weight'];
}
```
