# Data Type Conversion Tables

- This set of tables provides data types conversion in different scenarios. It covers the conversion of different data types such as integers, doubles, booleans, and strings, and how they are represented in different output formats such as integers, booleans, and strings.
- The tables also indicate when a conversion is not possible and is marked with a ⚠️ symbol.

## Functions used for testing

- **intCheck**(int $var)
- **floatCheck**(float $var)
- **boolCheck**(bool $var)
- **stringCheck**(string $var)
- **arrayCheck**(array $var)
- **objectCheck**(object $var)
- **callablCheck**(callable $var)

## Conversion Tables

- Each table has input and outpout columns.
- Input is self explanatory.
- Output contains 2 datas each separated by a space:
  - The value of the output.
  - The data type of the output.

### Conversion from other to integer

| Input        | Output    |
| ------------ | --------- |
| 1            | 1 integer |
| 1.1          | 1 integer |
| true  (bool) | 1 integer |
| false (bool) | 0 integer |
| "string"     | ⚠️         |
| [1,2,3]      | ⚠️         |
| null         | ⚠️         |

### Conversion from other to double

| Input        | Output     |
| ------------ | ---------- |
| 1            | 1 double   |
| 1.1          | 1.1 double |
| true  (bool) | 1 double   |
| false (bool) | 0 double   |
| "string"     | ⚠️          |
| [1,2,3]      | ⚠️          |
| null         | ⚠️          |

### Conversion from other to boolean

| Input        | Output    |
| ------------ | --------- |
| 1            | 1 boolean |
| 1.1          | 1 boolean |
| true  (bool) | 1 boolean |
| false (bool) | boolean   |
| "string"     | 1 boolean |
| [1,2,3]      | ⚠️         |
| null         | ⚠️         |

### Conversion from other to string

| Input        | Output          |
| ------------ | --------------- |
| 1            | "1" string      |
| 1.1          | "1.1" string    |
| true  (bool) | "1" string      |
| false (bool) | " " string      |
| "string"     | "string" string |
| [1,2,3]      | ⚠️               |
| null         | ⚠️               |

### Conversion from other to array

| Input        | Output        |
| ------------ | ------------- |
| 1            | ⚠️             |
| 1.1          | ⚠️             |
| true  (bool) | ⚠️             |
| false (bool) | ⚠️             |
| "string"     | ⚠️             |
| [1,2,3]      | [1,2,3] array |
| null         | ⚠️             |

### Conversion from other to object

| Input        | Output |
| ------------ | ------ |
| 1            | ⚠️      |
| 1.1          | ⚠️      |
| true  (bool) | ⚠️      |
| false (bool) | ⚠️      |
| "string"     | ⚠️      |
| [1,2,3]      | ⚠️      |
| null         | ⚠️      |

### Conversion from other to callable

| Input        | Output |
| ------------ | ------ |
| 1            | ⚠️      |
| 1.1          | ⚠️      |
| true  (bool) | ⚠️      |
| false (bool) | ⚠️      |
| "string"     | ⚠️      |
| [1,2,3]      | ⚠️      |
| null         | ⚠️      |
