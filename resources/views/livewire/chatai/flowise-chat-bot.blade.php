<?php

use function Livewire\Volt\{state, title};
title('Chat Bot');
?>

<div>
  <script type="module">
    Chatbot.initFull({
      chatflowid: "969d26d0-a327-4544-a587-7f0c324e3e04",
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
  <flowise-fullchatbot></flowise-fullchatbot>
</div>
