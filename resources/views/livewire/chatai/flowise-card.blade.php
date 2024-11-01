<?php

use function Livewire\Volt\{state, title, mount};
use Illuminate\Support\Facades\Storage;
title('Daftar Chat Bot');

state(['rpbAvatar' => '', 'policyAvatar' => '']);

mount(function () {
    $this->rpbAvatar = Storage::disk('public')->url('img/logo.svg');
    $this->policyAvatar = Storage::disk('public')->url('img/logo.svg');
});

?>

<div class="mx-auto px-4 text-center md:max-w-screen-md lg:max-w-screen-lg lg:px-36">
  <div class="flex flex-grow items-center">
    <x-chat.flowise-breadcrumb home="#" />
  </div>
  <span class="pb-6 font-semibold uppercase text-gray-400">Coba Ai Kami</span>
  <div class="mt-6 grid grid-cols-2 gap-4">
    <x-chat.flowise-card title="RPB"
                         subTitle="Dokumen Rencana Pemulihan Bencana"
                         link="chat-rpb-bot"
                         :image="$this->rpbAvatar"
                         imageAlt="RPB" />
    <x-chat.flowise-card title="Policy"
                         subTitle="Dokumen Policy IT PMU"
                         link="chat-policy-bot"
                         :image="$this->policyAvatar"
                         imageAlt="Policy" />
  </div>
  <div class="mt-6 grid grid-rows-1 gap-4">
    <x-chat.flowise-card-2 link="/chat-ai/doc" />
  </div>
</div>
