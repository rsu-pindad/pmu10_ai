import './bootstrap';
import 'flowbite';

import Chatbot from './../../node_modules/flowise-embed/dist/web';
import { createAvatar } from '@dicebear/core';
import { lorelei, funEmoji, initials } from '@dicebear/collection';

window.Chatbot = Chatbot;
window.createAvatar = createAvatar;
window.lorelei = lorelei;
window.funEmoji = funEmoji;
window.initials = initials;