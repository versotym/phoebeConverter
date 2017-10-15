# phoebeConverter
> Converter from PhoEBE (phonetic notation used in <a href="http://versologie.cz" target="_blank">Corpus of Czech Verse</a>) to <a href="https://en.wikipedia.org/wiki/International_Phonetic_Alphabet" target="_blank">IPA</a>, <a href="https://en.wikipedia.org/wiki/X-SAMPA" target="_blank">X-SAMPA</a>, and <a href="http://fonetika.ff.cuni.cz/o-fonetice/foneticka-transkripce/ceska-foneticka-transkripce/" target="_blank">Czech Phonetic Transcription</a>.

## Examples  

### Python 

```python
import phoebeConverter

p = PhoebeConverter()
phoebe_to_convert = 'Zili bili Det a bapka'
converted = p.convert(phoebe_to_convert, system='ipa')
print('original:  {0}'.format(phoebe_to_convert))
print('converted: {0}'.format(converted))
  
>>> original:  Zili bili Det a bapka
>>> converted: ʒɪlɪ bɪlɪ ɟɛt a bapka
```

### PHP  

```php
include_once "phoebeConverter.php";

$p = new PhoebeConverter();
$phoebe_to_convert = 'Zili bili Det a bapka';
$converted = $p->convert($phoebe_to_convert, 'ipa');
echo('original: ' . $phoebe_to_convert . ' ||| converted: ' . $converted);

>>> original:  Zili bili Det a bapka ||| beconverted: ʒɪlɪ bɪlɪ ɟɛt a bapka
```
