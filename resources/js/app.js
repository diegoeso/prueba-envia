require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import Echo from 'laravel-echo'

window.Echo = new Echo({
  broadcaster: 'pusher',
  key: '887fcad413a629f91fe2',
  cluster: 'us2',
  forceTLS: true
});

var channel = Echo.channel('canal-guia');
channel.listen('.nueva-guia', function(data) {
  alert('Se ha generado una nueva guia: '+ data.res);
});

