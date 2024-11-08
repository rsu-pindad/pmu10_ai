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

  <div class="mx-4 my-2">
    <x-alert.alert type="info"
                   title="Policy"
                   message="dokumen dapat dilihat di">
      <x-slot:link>
        <a href="{{ Storage::disk('public')->url('dokumen/IT Policy PMU.pdf') }}"
           target="_blank"
           class="font-medium text-blue-600 underline hover:no-underline dark:text-blue-500">klik disini</a>
      </x-slot>
    </x-alert.alert>
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
      chatflowid: "9b0f6f78-115c-4cc6-a0f6-6a3c11d2db0b",
      apiHost: "https://backbone.pmu.my.id/",
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
          message: 'Dengan menggunakan chatbot ini, Anda menyetujui Syarat & Ketentuan',
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
