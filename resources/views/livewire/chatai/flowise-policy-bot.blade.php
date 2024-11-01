<?php

use function Livewire\Volt\{title};
title('Policy Chat Bot');
?>

<div>
  <div class="mx-4 my-4">
    <x-chat.flowise-breadcrumb>
      <x-slot:list>
        <li>
          <div class="flex items-center">
            <svg class="mx-1 h-3 w-3 text-gray-400 rtl:rotate-180"
                 aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg"
                 fill="none"
                 viewBox="0 0 6 10">
              <path stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="m1 9 4-4-4-4" />
            </svg>
            <a href="#"
               class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white md:ms-2">
              Policy
            </a>
          </div>
        </li>
      </x-slot:list>
    </x-chat.flowise-breadcrumb>
  </div>

  <div class="mt-4">
    <flowise-fullchatbot></flowise-fullchatbot>
  </div>

  <script type="module">
    const avatar = createAvatar(funEmoji, {
      seed: 'User',
    });
    const avatarBot = createAvatar(funEmoji, {
      seed: 'PMU BOT Policy',
    });
    Chatbot.initFull({
      chatflowid: "a199e9d3-61fe-43dc-9a3a-0f23b7d14176",
      apiHost: "https://ai.pindadmedika.my.id",
      theme: {
        button: {
          backgroudColor: '#f1f2f3f4',
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
        disclaimer: {
          title: 'Disclaimer',
          message: 'By using this chatbot, you agree to the <a target="_blank" href="https://flowiseai.com/terms">Terms & Condition</a>',
        },
        chatWindow: {
          showTitle: true,
          showAgentMessages: true,
          title: 'BOT PMU Policy',
          titleAvatarSrc: avatarBot.toDataUri(),
          welcomeMessage: 'Halo apa kabar, ada yang bisa kami bantu ?',
          errorMessage: 'oops, sepertinya terjadi kendala',
          backgroundColor: '#daf2e2',
          fontSize: 18,
          starterPrompts: ['tolong berikan ringkasan'],
          starterPromptFontSize: 15,
          renderHTML: true,
          botMessage: {
            backgroundColor: '#f7f8ff',
            textColor: '#303235',
            showAvatar: true,
            avatarSrc: avatarBot.toDataUri(),
          },
          userMessage: {
            backgroundColor: '#3B81F6',
            textColor: '#ffffff',
            showAvatar: true,
            avatarSrc: avatar.toDataUri()
          },
          textInput: {
            placeholder: 'cari tahu isi dokumen IT POLICY di PT PMU ',
            maxChars: 50,
            maxCharsWarningMessage: 'pesan anda terlalu banyak :(',
            autoFocus: true,
            sendMessageSound: true,
            receiveMessageSound: true,
          },
          feedback: {
            color: '#303235',
          },
          dateTimeToggle: {
            date: true,
            time: true,
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