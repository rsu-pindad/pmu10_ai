<?php

use function Livewire\Volt\{state};
?>

<div>
    
  <script type="module">
    Chatbot.init({
      chatflowid: "8aefaee3-259b-409b-b66c-6af931b98865",
      apiHost: "https://ai.pindadmedika.my.id",
      theme: {
        button: {
          backgroudColor: '#42f566',
          dragAndDrop: true,
          autoWindowOpen: {
            autoOpen: true,
            openDelay: 2,
            autoOpenOnMobile: true
          }
        },
        tooltip: {
          showTooltip: false,
          tooltipMessage: 'Halo apa kabar',
          tooltipBackgroundColor: 'black',
          tooltipTextColor: 'white',
          tooltipFontSize: 14,
        },
        chatWindow: {
          welcomeMessage: 'Halo apa kabar, ada yang bisa kami bantu ?',
          errorMessage: 'oops, sepertinya terjadi kendala',
          renderHTML: true,
          textInput: {
            placeholder: '...............?',
            maxChars: 50,
            maxCharsWarningMessage: 'pesan anda terlalu banyak :(',
            autoFocus: true,
            sendMessageSound: true,
            receiveMessageSound: true,
          },
          footer: {
            textColor: '#303235',
            text: '',
            company: 'PT PINDAD MEDIKA UTAMA',
            companyLink: 'https://pindadmedika.com',
          },
        },
      }
    })
  </script>
</div>
