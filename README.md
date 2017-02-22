# Compress Image
Codeigniter Library to Compress Image 

This library was developed with the purpose of optimizing the images in size and quality.

## How to use

First you need to download the **Compress.php** file and put inside Codigniter library folder of your project **(project/application/libraries)**

Inside of your controller or other class that you want to use, add this code:

```
$this->load->library('Compress');  // load the codeginiter library

$file = 'path/to/file/filename.extension'; // file that you wanna compress
$new_name_image = 'new_name_of_file'; // name of new file compressed
$quality = 60; // Value that I chose
$destination = 'final_path/to/file/'; // This destination must be exist on your project
```

Initiate the class:
```
$compress = new Compress();
```

Add values to each element:
```
$compress->file_url = $file;
$compress->new_name_image = $new_name_image;
$compress->quality = $quality;
$compress->destination = $destination;
```

And finally let the library do the rest for you:
```
$result = $compress->compress_image();
```

## Result

The library will always return for you a array with this specific data:

Item | Description | Examples
------------ | ------------- | -------------
image | New name of compressed image | eg.: new_file_name.extension
real_file_path | Real file path of a compressed image | eg.: X:/path/to/folder/of/project/new_file_name.extension
url_file_path | Site url file of a compressed image | eg.: http://url/to/project/folder/new_file_name.extension

## Don't use CI to create your projects?

You can use this composer library that I've created, it's almost the same thing.

* [Compress-image](https://github.com/eihror/compress-image)
