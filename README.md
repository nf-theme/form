# Forms & HTML Builder

- [Installation](#installation)
- [Opening A Form](#opening-a-form)
- [Labels](#labels)
- [Text, Text Area, Password & Hidden Fields](#text)
- [Checkboxes and Radio Buttons](#checkboxes-and-radio-buttons)
- [File Input](#file-input)
- [Number Input](#number)
- [Date Input](#date)
- [Drop-Down Lists](#drop-down-lists)
- [Buttons](#buttons)


<a name="installation"></a>
## Installation

Begin by installing this package through Composer.

```
composer require nf/form
```

<a name="opening-a-form"></a>
## Opening A Form

#### 

```php

$form = Form::open(['url' => 'foo/bar', 'method' => 'post', 'files' => true]);

$form .= Form::close();

echo $form;
```

You may also use it in view file

```php
{!! Form::open(['url' => 'foo/bar', 'method' => 'post', 'files' => true]) !!}
    //
{!! Form::close() !!}
```

<a name="labels"></a>
## Labels

#### Generating A Label Element

```php
echo Form::label('email', 'E-Mail Address');
```

#### Specifying Extra HTML Attributes

```php
echo Form::label('email', 'E-Mail Address', ['class' => 'awesome']);
```

> **Note:** After creating a label, any form element you create with a name matching the label name will automatically receive an ID matching the label name as well.

<a name="text"></a>
## Text, Text Area, Password & Hidden Fields

#### Generating A Text Input

```php
echo Form::text('username');
```

#### Specifying A Default Value

```php
echo Form::text('email', 'example@gmail.com');
```

> **Note:** The *hidden* and *textarea* methods have the same signature as the *text* method.

#### Generating A Password Input

```php
echo Form::password('password', ['class' => 'awesome']);
```

#### Generating Other Inputs

```php
echo Form::email($name, $value = null, $attributes = []);
echo Form::file($name, $attributes = []);
```

<a name="checkboxes-and-radio-buttons"></a>
## Checkboxes and Radio Buttons

#### Generating A Checkbox Or Radio Input

```php
echo Form::checkbox('name', 'value');

echo Form::radio('name', 'value');
```

#### Generating A Checkbox Or Radio Input That Is Checked

```php
echo Form::checkbox('name', 'value', true);

echo Form::radio('name', 'value', true);
```

<a name="number"></a>
## Number

#### Generating A Number Input

```php
echo Form::number('name', 'value');
```

<a name="date"></a>
## Date

#### Generating A Date Input

```php
echo Form::date('name', \Carbon\Carbon::now());
```

<a name="file-input"></a>
## File Input

#### Generating A File Input

```php
echo Form::file('image');
```

> **Note:** The form must have been opened with the `files` option set to `true`.

<a name="drop-down-lists"></a>
## Drop-Down Lists

#### Generating A Drop-Down List

```php
echo Form::select('size', ['L' => 'Large', 'S' => 'Small']);
```

#### Generating A Drop-Down List With Selected Default

```php
echo Form::select('size', ['L' => 'Large', 'S' => 'Small'], 'S');
```

#### Generating a Drop-Down List With an Empty Placeholder

This will create an `<option>` element with no value as the very first option of your drop-down.

```php
echo Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Pick a size...']);
```

#### Generating A Grouped List

```php
echo Form::select('animal',[
    'Cats' => ['leopard' => 'Leopard'],
    'Dogs' => ['spaniel' => 'Spaniel'],
]);
```

#### Generating A Drop-Down List With A Range

```php
echo Form::selectRange('number', 10, 20);
```

#### Generating A List With Month Names

```php
echo Form::selectMonth('month');
```

#### Generating A List of years

```php
echo Form::year('year', 1990, 2018);
```

<a name="buttons"></a>
## Buttons

#### Generating A Submit Button

```php
echo Form::submit('Click Me!');
```

> **Note:** Need to create a button element? Try the *button* method. It has the same signature as *submit*.
