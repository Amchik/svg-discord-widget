# svg-discord-widget

Говнокод, что бы рекламировать свой дискорд сервер в своём профиле

## Использование

Я просто залил сюда php и svg файлы. Их лучше кстати не читать... В принципе, если очень хочется, то можно развернуть это на своём сервере, но крайне не рекомендуется. Я это сделал на свой страх и риск, а так же мне было нечего терять:

Ему всё равно что ты там в query передашь, главное что бы было `server=123`. `server` - строковый параметр, ибо в число не влез, который обозначает какой сервер смотреть (...). На сервере должен быть включен виджет, иначе получишь ошибку `bad request.`. 
<!-- даблточка -->

В принципе всё. `https://e6atb.zagadka-zhana-fresko.ru/discord.php?server=710418337934344223`

![](https://e6atb.zagadka-zhana-fresko.ru/discord.php?server=710418337934344223 "Блять")

Использование для гитхаба:

```md
<a href="https://discord.gg/invite/invite-code">![discord server](https://e6atb.zagadka-zhana-fresko.ru/discord.php?server=710418337934344223 "join pls")</a>
```

