![](https://sundayit.hu/img/logo.png) 
# Sunday Chatframe
This package builds upon SundayIT's fork of the Botman web-widget:
Fork: [molbal/web-widget](https://github.com/molbal/web-widget)
Original:[botman/web-widget](https://github.com/botman/web-widget)

## Usage - **Backend Blade**
![](https://img.icons8.com/cotton/64/000000/server.png) 
### 1. Install this package, if you don't have it yet to composer:
```bash
$ composer global require aheenam/laravel-package-cli
```

### 2. Add this to **composer.json**
```json
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/sunday-ltd/chatframe"
        }
    ],
    
```

### 3. Install package
``` bash
$ composer require sundayit/chatframe
```

### 4. Run command (Optional)
If you want to locally host the chatframe's JS and CSS files instead of using the CDN, run the following command
``` bash
$ php artisan vendor:publish --provider="SundayIT\chatframe\chatframeServiceProvider"
```
Which will place the necessary JS and CSS files. In this case, open `packages/sundayit/chatframe/views/chat/chatframe.blade.php` and uncommment the local resources, and remove the CDN links. 

---

## Usage - **Frontend widget**

![](https://img.icons8.com/cotton/64/000000/cloud-binary-code.png)
### 1. Link the frontend widget
This widget loads the chat bubble to the bottom right corner and injects the iframe
Use our CDN:
```html
<script src="https://cdn.jsdelivr.net/gh/molbal/web-widget@1.0/build/js/widget.js" integrity="sha256-myGUOuEeTzqiz4ltlVns6LXOWUcFq1Rr+Ie9641fQYI=" crossorigin="anonymous"></script>
```

or download from the latest release: https://github.com/molbal/web-widget/releases and either compile it yourself (see project [readme](https://github.com/molbal/web-widget/blob/master/README.md)) or take /build/js/widget.js

### 2. Link CSS for the styles 

```html
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/molbal/web-widget@1.0/build/assets/css/widget.min.css">
```

### 3. Set up the settings _BEFORE_ the frontend widget.:
```html
<script type="text/javascript">
    var botmanWidget = {
        chatServer: 'https://php-uk-conference-2018.marcelpociot.de/botman',
        frameEndpoint: '/chat-endpoint',
        bubbleAvatarUrl: "https://img.icons8.com/color/96/000000/technical-support.png",
        title: 'Chatbot',
        
        /* Below Sunday development */
        headerTextColor: '#fff',
        headerTextFontFamily: "Barlow Semi Condensed",
        headerTextFontWeight: 700,
        mainColor: '#f37820',
        headerIconBorderRadius: '0',
        headerIconDisplayed: true,
        headerIconSize: '80px'
    }
</script>
```

### Example:
https://gist.github.com/molbal/4397765979cccf8339f2c809851a36ff

---
## Change log
![](https://img.icons8.com/cotton/64/000000/document.png)

Please see the [changelog](changelog.md) for more information on what has changed recently.


## Security
![](https://img.icons8.com/cotton/64/000000/cloud-firewall.png)

If you discover any security related issues, please email author email instead of using the issue tracker:
molnar.balint@mdy.hu

## Credits
![](https://img.icons8.com/cotton/64/000000/cloud-user-group.png)

- [Sunday Ltd.](https://sundayit.hu/chatbots)
- [Botman](https://botman.io)
- [Icons8](https://icons8.com)
- [Laravel](https://laravel.com)
