@extends('layouts/dojoapp')

@section('content')
<div class="flex flex-col p-4 md:ml-60 flex-grow bg-white">
    <div class="px-4 max-w-4xl mx-auto min-h-screen py-12">

        <div class="text-3xl lg:text-4xl font-bold tracking-tight mb-4 text-center">
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-green-400 ">
            Markdown Editor with Codemirror and AlpineJS
            </span>
        </div>
    
        <div
            x-data="markdown()"
            x-init="
                convertHtmlToMarkdown();
                codeMirrorEditor = CodeMirror.fromTextArea($refs.input, {
                    mode: 'markdown',
                    theme: 'default',
                    lineWrapping: true
                });

                codeMirrorEditor.setValue(content);
                codeMirrorEditor.setSize('100%', height);
                setTimeout(function() {
                    codeMirrorEditor.refresh();
                }, 1);

                codeMirrorEditor.on('change', () => content = codeMirrorEditor.getValue())
            "
            class="relative"
            x-cloak
        >
            <div class="bg-gray-50 border border-b-0 border-gray-300 top-0 left-0 right-0 block rounded-t-md">
                <button type="button" class="py-2 px-4 inline-block text-gray-400 font-semibold" :class="{ 'text-indigo-600': tab === 'write' }" x-on:click.prevent="tab = 'write'; showConvertedMarkdown = false">Write</button>
                <button type="button" class="py-2 px-4 inline-block text-gray-400 font-semibold" :class="{ 'text-indigo-600': tab === 'preview' && showConvertedMarkdown === true }" x-on:click.prevent="tab = 'preview'; convertedMarkdown()">Preview</button>
            </div>

            <div x-show="! showConvertedMarkdown">
                <div>
                    <textarea 
                        
                        x-ref="input" 
                        x-model.debounce.750ms="content" 
                        class="hidden"
                        name="content"
                    ></textarea>
                </div>
            </div>

            <div x-show="showConvertedMarkdown">
                <div x-html="convertedContent" class="w-full prose max-w-none prose-indigo leading-6 rounded-b-md shadow-sm border border-gray-300 p-5 bg-white overflow-y-auto" :style="`height: ${height}; max-width: 100%`"></div>
            </div>
        </div>

        <div class="mt-6 text-gray-500 text-sm text-center">Created by <a class="text-indigo-500 underline" href="https://twitter.com/mithicher">@mithicher</a>.</div>
    </div>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/codemirror@5.59.2/lib/codemirror.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/codemirror@5.59.2/mode/markdown/markdown.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/turndown@7.0.0/dist/turndown.min.js"></script>
    <script src="https://unpkg.com/marked@0.3.6/lib/marked.js"></script>
    <script>
        function markdown() {
            return {
                height: '500px',
                tab: 'write',
                content: '',
                showConvertedMarkdown: false,
                convertedContent: '',
                convertedMarkdown() {
                    this.showConvertedMarkdown = true;
                    this.convertedContent = marked(this.content, { sanitize: true });
                },
                convertHtmlToMarkdown() {
                    turndownService = new TurndownService({
                        headingStyle: 'atx',
                        codeBlockStyle: 'fenced'
                    });

                    this.content = turndownService.turndown(`
                        <h1 id="sample-markdown">Sample Markdown</h1>
                        <p>This is some basic, sample markdown.</p>
                        <h2 id="second-heading">Second Heading</h2>
                        <ul>
                        <li>Unordered lists, and:<ol>
                        <li>One</li>
                        <li>Two</li>
                        <li>Three</li>
                        </ol>
                        </li>
                        <li>More</li>
                        </ul>
                        <blockquote>
                        <p>Blockquote</p>
                        </blockquote>
                        <p>And <strong>bold</strong>, <em>italics</em>, and even <em>italics and later <strong>bold</strong></em>. Even <del>strikethrough</del>. <a href="https://markdowntohtml.com">A link</a> to somewhere.</p>
                        <p>And code highlighting:</p>
                        <pre><code class="lang-js"><span class="hljs-keyword">var</span> foo = <span class="hljs-string">'bar'</span>;

                        <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">baz</span><span class="hljs-params">(s)</span> </span>{
                        <span class="hljs-keyword">return</span> foo + <span class="hljs-string">':'</span> + s;
                        }
                        </code></pre>
                        <p>Or inline code like <code>var foo = &#39;bar&#39;;</code>.</p>
                        <p>Or an image of bears</p>
                        <p><img src="http://placebear.com/200/200" alt="bears"></p>
                        <p>The end ...</p>
                    `);
                }
            }
        }
    </script>
</div>
@endsection