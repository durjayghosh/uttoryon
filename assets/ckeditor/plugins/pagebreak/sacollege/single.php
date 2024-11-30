rence internal" href="#controllers" id="id1">Controllers</a><ul>
<li><a class="reference internal" href="#what-is-a-controller" id="id2">What is a Controller?</a></li>
<li><a class="reference internal" href="#let-s-try-it-hello-world" id="id3">Let&#8217;s try it: Hello World!</a></li>
<li><a class="reference internal" href="#methods" id="id4">Methods</a></li>
<li><a class="reference internal" href="#passing-uri-segments-to-your-methods" id="id5">Passing URI Segments to your methods</a></li>
<li><a class="reference internal" href="#defining-a-default-controller" id="id6">Defining a Default Controller</a></li>
<li><a class="reference internal" href="#remapping-method-calls" id="id7">Remapping Method Calls</a></li>
<li><a class="reference internal" href="#processing-output" id="id8">Processing Output</a></li>
<li><a class="reference internal" href="#private-methods" id="id9">Private methods</a></li>
<li><a class="reference internal" href="#organizing-your-controllers-into-sub-directories" id="id10">Organizing Your Controllers into Sub-directories</a></li>
<li><a class="reference internal" href="#class-constructors" id="id11">Class Constructors</a></li>
<li><a class="reference internal" href="#reserved-method-names" id="id12">Reserved method names</a></li>
<li><a class="reference internal" href="#that-s-it" id="id13">That&#8217;s it!</a></li>
</ul>
</li>
</ul>
</di
<div class="section" id="what-is-a-controller">
<h2><a class="toc-backref" href="#id2">What is a Controller?</a><a class="headerlink" href="#what-is-a-controller" title="Permalink to this headline">¶</a></h2>
<p><strong>A Controller is simply a class file that is named in a way that can be
associated with a URI.</strong></p>
<p>Consider this URI:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nx">example</span><span class="o">.</span><span class="nx">com</span><span class="o">/</span><span class="nx">index</span><span class="o">.</span><span class="nx">php</span><span class="o">/</span><span class="nx">blog</span><span class="o">/</span>
</pre></div>
</di