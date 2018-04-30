# ResourceStream

- **класс** `ResourceStream` (`php\io\ResourceStream`) **унаследован от** `Stream` (`php\io\Stream`)
- **пакет** `std`
- **исходники** [`php/io/ResourceStream.php`](./src/main/resources/JPHP-INF/sdk/php/io/ResourceStream.php)

**Описание**

Class ResourceStream

---

#### Статичные Методы

- `ResourceStream ::`[`getResources()`](#method-getresources)

---

#### Методы

- `->`[`__construct()`](#method-__construct)
- `->`[`read()`](#method-read)
- `->`[`readFully()`](#method-readfully)
- `->`[`write()`](#method-write)
- `->`[`eof()`](#method-eof)
- `->`[`seek()`](#method-seek)
- `->`[`getPosition()`](#method-getposition)
- `->`[`close()`](#method-close)
- `->`[`toExternalForm()`](#method-toexternalform)

---
# Методы

<a name="method-__construct"></a>

### __construct()
```php
__construct(string $path): void
```

---

<a name="method-read"></a>

### read()
```php
read(int $length): mixed
```

---

<a name="method-readfully"></a>

### readFully()
```php
readFully(): mixed
```

---

<a name="method-write"></a>

### write()
```php
write(string $value, null|int $length): int
```

---

<a name="method-eof"></a>

### eof()
```php
eof(): bool
```

---

<a name="method-seek"></a>

### seek()
```php
seek(int $position): mixed
```

---

<a name="method-getposition"></a>

### getPosition()
```php
getPosition(): int
```

---

<a name="method-close"></a>

### close()
```php
close(): mixed
```

---

<a name="method-toexternalform"></a>

### toExternalForm()
```php
toExternalForm(): string
```

---