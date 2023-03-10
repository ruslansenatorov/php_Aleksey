1. 
Линтер - это программа, которая делает ревью кода. Проверяет код 
на соответствие некоторым установленным правилам. 


2. 
status code 200 - это часть ответа сервера при запросах по протоколу HTTP. 
200 OK — успешный запрос. Если клиентом были запрошены какие-либо данные, 
то они находятся в заголовке и/или теле сообщения. 

Какие ещё бывают: 
(по кодам 2ХХ) 
201 Created — в результате успешного выполнения запроса был создан 
новый ресурс. 
202 Accepted — запрос был принят на обработку, но она не завершена. 
203 Non-Authoritative Information — аналогично ответу 200, но в этом 
случае передаваемая информация была взята не из первичного источника 
(резервной копии, другого сервера и т. д.) и поэтому может быть неактуальной. 
И так далее. 

Коды вида 1ХХ - информационные (коды, информирующие о процессе передачи)
Коды вида 2ХХ - успех (информируют о случаях успешного принятия и 
                обработки запроса клиента) 
Коды вида 3ХХ - перенаправление (сообщают клиенту, что для успешного 
                выполнения операции необходимо сделать другой запрос, 
                как правило, по другому URI.) 
Коды вида 4ХХ - ошибка клиента (указание ошибок со стороны клиента) 
Коды вида 5ХХ - ошибка сервера (указание ошибок со стороны сервера) 

Где посмотреть:
В браузере в панели разработчика: вкладка Network. Также есть браузерные 
расширения: HTTP Headers для Google Chrome, HTTP Header для Opera. 
Или специальное ПО. 


3. 
Куки - это фрагменты текста, которые разные сайты записывают в разные 
файлы на локальном диске пользователя. 
Пользователю куки упрощают жизнь в том плане, что запоминают настройки. 
А для владельца сайта плюс в том, что по userId и clientId из куки можно 
отслеживать поведение пользователей на сайте. 


4. 
Сессия (визит, сеанс) - определенное время и/или набор действий, который 
пользователи прводят/совершают на сайте. По умолчанию, прекращается после 
30 минут неактивности. 


5. 
Да, более безопасно, чем просто по логину-паролю и обеспечивает гибкость 
в системе управления доступом. 


6. 
HTTP-заголовки - это представленные в текстовом формате сведения о 
различных параметрах HTTP-сессии. Заголовки позволяют веб-серверу 
информировать браузер о настройках, которые следует применять для данного 
адреса и данного сайта. Эти настройки могут относиться как к текущей 
сессии, так и к последующим. Клиент также передаёт данные на сервер с 
помощью заголовков: об используемом браузере и другие параметры. 

В PHP заголовки передаются с помощью функции header()


7. 
Вебхук — это способ оповещения клиента о произошедшем в системе событии 
с помощью пользовательских обратных вызовов по HTTP


8. 
Поднять сайт, либо иной веб-клиент (например, другой бот Telegram), 
который будет отправлять запросы в бот Telegram. Метод авторизации - токен. 


9. 
Docker — это платформа для разработки, доставки и запуска контейнерных 
приложений. Docker позволяет создавать контейнеры, автоматизировать их 
запуск и развертывание, управляет жизненным циклом. Он позволяет 
запускать множество контейнеров на одной хост-машине.

Контейнеры — это способ стандартизации развертки приложения и отделения 
его от общей инфраструктуры. Экземпляр приложения запускается в 
изолированной среде, не влияющей на основную операционную систему. 


10. 
Выбор системы для файлового сервера Обычно, выбор падает на такие системы 
как Windows или UNIX (например, Linux Ubuntu, Linux CentOS, FreeBSD). 
В целом, любая из них хорошо справится с ролью файлового сервера, и 
чаще всего, системные администраторы выбирают ту, в которой лучше всего 
ориентируются.

Из очевидных плюсов Linux - бесплатность, высокая стабильность и 
безопасность. Так что, в большинстве это Linux. 


11. 
Функции работы со строками в PHP. 

strtolower() — Преобразует строку в нижний регистр 
strlen() — Возвращает длину строки 
trim() — Удаляет пробелы (или другие символы) из начала и конца строки 
str_replace() — Заменяет все вхождения строки поиска на строку замены 
substr() — Возвращает подстроку из строки 
strpos() — Возвращает позицию первого вхождения подстроки 