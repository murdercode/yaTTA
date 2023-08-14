// import './bootstrap';

// Highlight.js - Parse markdown codes
import hljs from 'highlight.js';
import 'highlight.js/styles/stackoverflow-dark.css';

parseMarkdownCode();

function parseMarkdownCode() {
    document.querySelectorAll('.message-container .message-baloon code').forEach(el => {
        hljs.highlightElement(el);
    });
}
