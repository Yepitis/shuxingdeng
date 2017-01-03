<header>
<h1>Go编程语言规范</h1>
<h2>2016年01月05日版本</h2>
</header>

<article>
<div>
<table>
<tbody>
<tr>
  <td>
  <dl>
  <dt><a href="#Introduction">简介</a></dt>
  <dt><a href="#Notation">记号</a></dt>
  <dt><a href="#Source_code_representation">源代码表示</a></dt>
    <dd><a href="#Characters">字符</a></dd>
    <dd><a href="#Letters_and_digits">字母和数字</a></dd>
  <dt><a href="#Lexical_elements">词法元素</a></dt>
    <dd><a href="#Comments">注释</a></dd>
    <dd><a href="#Tokens">符号</a></dd>
    <dd><a href="#Semicolons">分号</a></dd>
    <dd><a href="#Identifiers">标识符</a></dd>
    <dd><a href="#Keywords">关键字</a></dd>
    <dd><a href="#Operators_and_Delimiters">运算符和分隔符</a></dd>
    <dd><a href="#Integer_literals">整型字面量</a></dd>
    <dd><a href="#Floating-point_literals">浮点字面量</a></dd>
    <dd><a href="#Imaginary_literals">虚数字面量</a></dd>
    <dd><a href="#Rune_literals">文符字面量</a></dd>
    <dd><a href="#String_literals">字符串字面量</a></dd>
  <dt><a href="#Constants">常量</a></dt>
  <dt><a href="#Variables">变量</a></dt>
  <dt><a href="#Types">类型</a></dt>
    <dd><a href="#Method_sets">方法集</a></dd>
    <dd><a href="#Boolean_types">布尔类型</a></dd>
    <dd><a href="#Numeric_types">数值类型</a></dd>
    <dd><a href="#String_types">字符串类型</a></dd>
    <dd><a href="#Array_types">数组类型</a></dd>
    <dd><a href="#Slice_types">分片类型</a></dd>
    <dd><a href="#Struct_types">结构体类型</a></dd>
    <dd><a href="#Pointer_types">指针类型</a></dd>
    <dd><a href="#Function_types">函数类型</a></dd>
    <dd><a href="#Interface_types">接口类型</a></dd>
    <dd><a href="#Map_types">映射类型</a></dd>
    <dd><a href="#Channel_types">管道类型</a></dd>
  <dt><a href="#Properties_of_types_and_values">类型和值的性质</a></dt>
    <dd><a href="#Type_identity">类型一致</a></dd>
    <dd><a href="#Assignability">转换</a></dd>
  <dt><a href="#Blocks">块</a></dt>
  <dt><a href="#Declarations_and_scope">声明和作用域</a></dt>
    <dd><a href="#Label_scopes">标号作用域</a></dd>
    <dd><a href="#Blank_identifier">空白标识符</a></dd>
    <dd><a href="#Predeclared_identifiers">预声明标识符</a></dd>
    <dd><a href="#Exported_identifiers">导出的标识符</a></dd>
    <dd><a href="#Uniqueness_of_identifiers">唯一标识符</a></dd>
    <dd><a href="#Constant_declarations">常量声明</a></dd>
    <dd><a href="#Iota">Iota</a></dd>
    <dd><a href="#Type_declarations">类型声明</a></dd>
    <dd><a href="#Variable_declarations">变量声明</a></dd>
    <dd><a href="#Short_variable_declarations">短变量声明</a></dd>
    <dd><a href="#Function_declarations">函数声明</a></dd>
    <dd><a href="#Method_declarations">方法声明</a></dd>
  <dt><a href="#Expressions">表达式</a></dt>
    <dd><a href="#Operands">操作数</a></dd>
    <dd><a href="#Qualified_identifiers">合法标识符</a></dd>
    <dd><a href="#Composite_literals">复合值</a></dd>
    <dd><a href="#Function_literals">函数值</a></dd>
    <dd><a href="#Primary_expressions">主表达式</a></dd>
    <dd><a href="#Selectors">Selectors</a></dd>
    <dd><a href="#Indexes">下标</a></dd>
    <dd><a href="#Slices">分片</a></dd>
    <dd><a href="#Type_assertions">类型推断</a></dd></dl></td><td><dl>
    <dd><a href="#Calls">调用</a></dd>
    <dd><a href="#Passing_arguments_to_..._parameters">传递参数</a></dd>
    <dd><a href="#Operators">操作符/运算符</a></dd>
    <dd><a href="#Operator_precedence">运算符优先级</a></dd>
    <dd><a href="#Arithmetic_operators">算术运算符</a></dd>
    <dd><a href="#Integer_overflow">整数溢出</a></dd>
    <dd><a href="#Comparison_operators">比较运算符</a></dd>
    <dd><a href="#Logical_operators">逻辑运算符</a></dd>
    <dd><a href="#Address_operators">地址运算符</a></dd>
    <dd><a href="#Receive_operator">接收运算符</a></dd>
    <dd><a href="#Method_expressions">方法表达式</a></dd>
    <dd><a href="#Conversions">转换</a></dd>
    <dd><a href="#Constant_expressions">常量表达式</a></dd>
    <dd><a href="#Order_of_evaluation">值的计算顺序</a></dd>
  <dt><a href="#Statements">语句</a></dt>
    <dd><a href="#Empty_statements">空语句</a></dd>
    <dd><a href="#Labeled_statements">标号语句</a></dd>
    <dd><a href="#Expression_statements">表达式语句</a></dd>
    <dd><a href="#Send_statements">发送语句</a></dd>
    <dd><a href="#IncDec_statements">自加自减语句</a></dd>
    <dd><a href="#Assignments">赋值语句</a></dd>
    <dd><a href="#If_statements">if 语句</a></dd>
    <dd><a href="#Switch_statements">switch 语句</a></dd>
    <dd><a href="#For_statements">for 语句</a></dd>
    <dd><a href="#Go_statements">go 语句</a></dd>
    <dd><a href="#Select_statements">select 语句</a></dd>
    <dd><a href="#Return_statements">return 语句</a></dd>
    <dd><a href="#Break_statements">break 语句</a></dd>
    <dd><a href="#Continue_statements">continue 语句</a></dd>
    <dd><a href="#Goto_statements">goto 语句</a></dd>
    <dd><a href="#Fallthrough_statements">fallthrough 语句</a></dd>
    <dd><a href="#Defer_statements">defer 语句</a></dd>
  <dt><a href="#Built-in_functions">内置函数</a></dt>
    <dd><a href="#Close">关闭</a></dd>
    <dd><a href="#Length_and_capacity">长度和容量</a></dd>
    <dd><a href="#Allocation">分配</a></dd>
    <dd><a href="#Making_slices_maps_and_channels">构造分片、映射和管道</a></dd>
    <dd><a href="#Appending_and_copying_slices">追加和拷贝分片</a></dd>
    <dd><a href="#Deletion_of_map_elements">映射元素删除</a></dd>
    <dd><a href="#Complex_numbers">复数操作</a></dd>
    <dd><a href="#Handling_panics">问题处理</a></dd>
    <dd><a href="#Bootstrapping">Bootstrapping</a></dd>
  <dt><a href="#Packages">包</a></dt>
    <dd><a href="#Source_file_organization">源文件的组织</a></dd>
    <dd><a href="#Package_clause">Package clause</a></dd>
    <dd><a href="#Import_declarations">导入声明</a></dd>
    <dd><a href="#An_example_package">一个例子</a></dd>
  <dt><a href="#Program_initialization_and_execution">程序初始化和执行</a></dt>
    <dd><a href="#The_zero_value">0 值</a></dd>
    <dd><a href="#Program_execution">程序执行</a></dd>
  <dt><a href="#Errors">错误</a></dt>
  <dt><a href="#Run_time_panics">运行时问题</a></dt>
  <dt><a href="#System_considerations">系统考量</a></dt>
    <dd><a href="#Package_unsafe">包不安全</a></dd>
    <dd><a href="#Size_and_alignment_guarantees">尺寸大小和对齐保证</a></dd>
  </dl>
  </td>
</tr>
</tbody>
</table>
</div>

<h2 id="Introduction">简介</h2>

<p>这是Go语言的一个参考手册。如果想了解更多信息或是其他文档的话，可以去<a href="http://golang.org/">http://golang.org</a>查看。</p>

<p>Go是一门立志于系统编程的通用语言。它是强类型，带有垃圾回收，并且内在支持并发编程。程序由<em>包</em>组成，可以方便地管理它们之间的依赖。已有的实现采用了传统的编译/链接模型，最终生成可执行的二进制代码。</p>

<p>Go语言语法紧凑，非常有规则可循，可以很容易地被集成开发环境(IDE)等自动工具分析。</p>

<h2 id="Notation">记号</h2>
<p>后面的语法使用扩展的巴克斯-诺尔范式 (EBNF)进行描述:</p>

<pre class="grammar">
Production  = production_name "=" [ Expression ] "." .
Expression  = Alternative { "|" Alternative } .
Alternative = Term { Term } .
Term        = production_name | token [ "…" token ] | Group | Option | Repetition .
Group       = "(" Expression ")" .
Option      = "[" Expression "]" .
Repetition  = "{" Expression "}" .
</pre>

<p>产生式由一些术语和下面的几个按优先级从低到高的运算符组成：</p>
<pre class="grammar">
|   任选其一
()  一个整体
[]  可选/可有可无 (0 或是 1次)
{}  重复多次 (0 到 n 次)
</pre>

<p>小写的产生式的名字通常用于表示一个词法符号；非终结符一般用驼峰式命名。词法符号我们使用双引号<code>""</code>或是反向单引号<code>``</code>引住。</p>

<p><code>a … b</code>这种形式代表的是从<code>a</code>到<code>b</code>可选的字符集合。省略号<code>…</code>在本规范中也用于某些处的表示不完全枚举或是不再详细列出的代码分片。字符<code>…</code>(不同于三个字符的<code>...</code>)，它不是Go 语言的一个词法符号。</p>

<h2 id="Source_code_representation">源代码表示</h2>

<p>源文件是用<a href="http://en.wikipedia.org/wiki/UTF-8">UTF-8</a>编码的Unicode文本。文本并不是规范化的，所以，一个加重音的代码点不同于重音再加一个字符，后面的认为是两个字符。为了简化，本文档使用了并不是很规范的<em>字符</em>术语来指代源文本中的一个Unicode代码点。</p>

<p>每一个代码点都应该进行区分，比如说，大写字母和小写字母就是不同的字符。</p>
<p>实现限制: 为了和其他的工具兼容，一个编译器不允许在源文本中出现NUL字符(U+0000)。</p>

<h3 id="Characters">字符</h3>

<p>
下面是一些比较特殊的Unicode字符类：
</p>
<pre class="ebnf">
<a id="newline">newline</a>        = /* Unicode 代码点 U+000A */ .
<a id="unicode_char">unicode_char</a>   = /* 除了 newline 之外的其他 Unicode 代码点 */ .
<a id="unicode_letter">unicode_letter</a> = /* Unicode 代码点中归为 "字母" 的字符*/ .
<a id="unicode_digit">unicode_digit</a>  = /* Unicode 代码点中归为 "十进制数字" 的字符 */ .
</pre>

<p>在<a href="http://www.unicode.org/versions/Unicode6.0.0/">Unicode标准6.0</a>中，4.5章节“通用分类”定义了一系列的分类。Go会认为在这些分类中的 Lu，Ll，Lt，Lm，或是Lo是Unicode字符，Nd是Unicode数字。</p>

<h3 id="Letters_and_digits">字母和数字</h3>

<p>
下划线<code>_</code>(U+005F) 被认定为一个字母。
</p>
<pre class="ebnf">
<a id="letter">letter</a>        = <a href="#unicode_letter" class="noline">unicode_letter</a> | "_" .
<a id="decimal_digit">decimal_digit</a> = "0" … "9" .
<a id="octal_digit">octal_digit</a>   = "0" … "7" .
<a id="hex_digit">hex_digit</a>     = "0" … "9" | "A" … "F" | "a" … "f" .
</pre>

<h2 id="Lexical_elements">词法元素</h2>

<h3 id="Comments">注释</h3>

<p>有两种形式的注释：</p>

<ol>
<li><em>行注释</em>从两斜杠<code>//</code>开始到这一行结束。一个行注释给人的感觉就是一个换行；</li>
<li><em>通用注释(块注释)</em>从<code>/*</code>开始到<code>*/</code>结束。块注释中如果有行注释的话，那么它像是换行；其他情况下，它像是空白。</li>
</ol>

<p>注释不能嵌套。</p>

<h3 id="Tokens">词法符号</h3>

<p>词法符号是Go语言的词汇表。它们分为四类：<em>标识符</em>、<em>关键字</em>、<em>操作符</em>和<em>分隔符</em>。由空格(U+0020)、水平制表符(U+0009)、回车符(U+000D)和换行符(U+000A)所组成的<em>空白</em>除了可能是用于组成符号之外，其他的时候用作分隔符，在分析阶段会被忽略掉。 还有就是，换行符或是页面结束可能导致<a href="#Semicolons">分号</a>的插入。在将代码文本分割成符号的过程中，下一个符号应该是能组成一个合法符号的最长字符序列。</p>

<h3 id="Semicolons">分号</h3>

<p>正式语法使用分号<code>";"</code> 作为一些产生式的分隔符。 但是 Go 程序可以基于下面两条规则省略多数时候的分号：</p>

<ol>
<li>
<p>当输入文本在被拆成了记号的时候，在一些情况下分号会自动被插入非空白行的尾部的记号流中去，但是需要这一行的最后一个记号是：</p>
<ul>
  <li><a href="#Identifiers">标识符</a></li>

  <li>
      <a href="#Integer_literals">整数</a>、
      <a href="#Floating-point_literals">浮点数</a>、
      <a href="#Imaginary_literals">虚数</a>、
      <a href="#Rune_literals">分符</a>，或是
      <a href="#String_literals">字符串</a>值
  </li>

  <li><a href="#Keywords">关键字</a>
      <code>break</code>、
      <code>continue</code>、
      <code>fallthrough</code>，或是
      <code>return</code>
  </li>

  <li><a href="#Operators_and_Delimiters">操作符和分隔符</a>
      <code>++</code>、
      <code>--</code>，
      <code>)</code>、
      <code>]</code>，或是
      <code>}</code>
  </li>
</ul>
</li>

<li>为了允许复杂的语句能够挤在一行中，所以在<code>")"</code> or <code>"}"</code>前面的分号可能省略掉。</li>
</ol>

<p>
为了反映通常的使用习惯，本文档中的代码例子通常使用这些规则而省略了分号。
</p>


<h3 id="Identifiers">标识符</h3>

<p>
标识符用来命名变量、类型等程序实体。一个标识符实际上就是一个或是多个字母/数字序列，不过第一个字符应该是字母而不能是数字。
</p>
<pre class="ebnf">
<a id="identifier">identifier</a> = <a href="#letter" class="noline">letter</a> { <a href="#letter" class="noline">letter</a> | <a href="#unicode_digit" class="noline">unicode_digit</a> } .
</pre>
<pre>
a
_x9
ThisVariableIsExported
αβ
</pre>

<p>
有一些标识符是<a href="#Predeclared_identifiers">预声明的</a>。
</p>


<h3 id="Keywords">关键字</h3>

<p>
下面的关键字被保留了因而不能作为标识符使用：
</p>
<pre class="grammar">
break        default      func         interface    select
case         defer        go           map          struct
chan         else         goto         package      switch
const        fallthrough  if           range        type
continue     for          import       return       var
</pre>

<h3 id="Operators_and_Delimiters">操作符/运算符和间隔符</h3>

<p>
下面的一些字符序列被当做<a href="#Operators">操作符/运算符</a>、分隔符或是其他一些特殊的符号：
</p>
<pre class="grammar">
+    &amp;     +=    &amp;=     &amp;&amp;    ==    !=    (    )
-    |     -=    |=     ||    &lt;     &lt;=    [    ]
*    ^     *=    ^=     &lt;-    &gt;     &gt;=    {    }
/    &lt;&lt;    /=    &lt;&lt;=    ++    =     :=    ,    ;
%    &gt;&gt;    %=    &gt;&gt;=    --    !     ...   .    :
     &amp;^          &amp;^=
</pre>

<h3 id="Integer_literals">整数值</h3>

<p>
一个整数值实际就是一串数字组成的<a href="#Constants">整数常量</a>。一个可选的前缀表明了这个整数值的基数: <code>0</code>表示八进制， <code>0x</code>或者<code>0X</code>
代表十六进制。在十六进制表示中，<code>a-f</code>或是<code>A-F</code>表示数字 10 - 15。
</p>
<pre class="ebnf">
<a id="int_lit">int_lit</a>     = <a href="#decimal_lit" class="noline">decimal_lit</a> | <a href="#octal_lit" class="noline">octal_lit</a> | <a href="#hex_lit" class="noline">hex_lit</a> .
<a id="decimal_lit">decimal_lit</a> = ( "1" … "9" ) { <a href="#decimal_digit" class="noline">decimal_digit</a> } .
<a id="octal_lit">octal_lit</a>   = "0" { <a href="#octal_digit" class="noline">octal_digit</a> } .
<a id="hex_lit">hex_lit</a>     = "0" ( "x" | "X" ) <a href="#hex_digit" class="noline">hex_digit</a> { <a href="#hex_digit" class="noline">hex_digit</a> } .
</pre>

<pre>
42
0600
0xBadFace
170141183460469231731687303715884105727
</pre>

<h3 id="Floating-point_literals">浮点数值</h3>
<p>
一个浮点值实际就是由十进制数字所组成的<a href="#Constants">浮点常量</a>。它有一个整数部分、小数点、小数部分和指数部分。整数部分和小数部分还是由十进制数字组成；
指数部分是一个<code>e</code>或是<code>E</code>后面跟一个可选的有符号十进制指数。整数部分或是小数部分二者可以省略其一；小数点和指数部分也可以省略其一。
</p>
<pre class="ebnf">
<a id="float_lit">float_lit</a> = <a href="#decimals" class="noline">decimals</a> "." [ <a href="#decimals" class="noline">decimals</a> ] [ <a href="#exponent" class="noline">exponent</a> ] |
            <a href="#decimals" class="noline">decimals</a> <a href="#exponent" class="noline">exponent</a> |
            "." <a href="#decimals" class="noline">decimals</a> [ <a href="#exponent" class="noline">exponent</a> ] .
<a id="decimals">decimals</a>  = <a href="#decimal_digit" class="noline">decimal_digit</a> { <a href="#decimal_digit" class="noline">decimal_digit</a> } .
<a id="exponent">exponent</a>  = ( "e" | "E" ) [ "+" | "-" ] <a href="#decimals" class="noline">decimals</a> .
</pre>

<pre>
0.
72.40
072.40  // == 72.40
2.71828
1.e+0
6.67428e-11
1E6
.25
.12345E+5
</pre>

<h3 id="Imaginary_literals">虚数值</h3>
<p>
一个(纯)虚数是一个<a href="#Constants">复数常量</a>，只不过它只有虚数部分，而虚数部分是用十进制数字表示。它实际就是由一个<a href="#Floating-point_literals">浮点常量</a>
或是一个十进制整数后面跟一个小写的字母<code>i</code>组成。
</p>
<pre class="ebnf">
<a id="imaginary_lit">imaginary_lit</a> = (<a href="#decimals" class="noline">decimals</a> | <a href="#float_lit" class="noline">float_lit</a>) "i" .
</pre>

<pre>
0i
011i  // == 11i
0.i
2.71828i
1.e+0i
6.67428e-11i
1E6i
.25i
.12345E+5i
</pre>


<h3 id="Rune_literals">分符值</h3>

<p>
一个分符值就是一个<a href="#Constants">分符常量</a>，实际上是一个能标识一个 Unicode 代码点的整数值。一个分符值用一个单引号引住的一个或是多个字符来表示；
在引号中，除了单引号和换行是不允许的，其他的都可以。一个单引号引住的单个字符也表示这个字符本身的 Unicode 值，在用可变格式中使用反斜杠开始的多字节序列来表示值。
</p>
<p>
最简单地表示单个字符就是用单引号引住；因为 Go 源文本使用 UTF-8 编码的 Unicode字符，所以多个 UTF-8 字节可能只代表一个整数值。比如说，<code>'a'</code>它就只有一个字节，表示字符
<code>a</code>（Unicode U+0061），值是<code>0x61</code>；而<code>'ä'</code>则用两个字节(<code>0xc3</code> <code>0xa4</code>)表示带分音的字符<code>a</code>（U+00E4），
值是<code>0xe4</code>。
</p>
<p>
表示 ASCII 文本的时候可以使用反斜杠来转义值。有四种表示一个整数值，也是整数常量，的方法：<code>\x</code>后面跟两个十六进制的数字，是两个，不能多也不能少；
<code>\u</code>后面跟四个十六进制数字；<code>\U</code>后面跟八个十六进制数字；一个普通的反斜杠<code>\</code>后面跟三个八进制数字。不管哪种形式表示，值都是这种表示
所对应的字符的值。
</p>
<p>
尽管这些表示结果都是一个整数，但是它们之间却有着不同的表示范围。八进制的值能表示 0 到 255 之间的数。十六进制表示必须满足前面说的构造限制。
使用<code>\u</code>和<code>\U</code>进行转移表示的 Unicode 代码点，在它们中有一些值是不合法的，特别是对于超过<code>0x10FFFF</code>的和surrogate halves。
</p>
<p>
在反斜杠后面某些固定的字符代表一些特殊的值：
</p>
<pre class="grammar">
\a   U+0007 响铃符
\b   U+0008 后退符
\f   U+000C form feed
\n   U+000A 换行符
\r   U+000D 回车符
\t   U+0009 水平制表符
\v   U+000b 垂直制表符
\\   U+005c 反斜杠
\'   U+0027 单引号 （只在分符值中才是合法的转义）
\"   U+0022 双引号 （只在字符串值中是合法的转义）
</pre>
<p>
所有其他的在分符值中的以反斜杠开始的转义都是不合法的。
</p>
<pre class="ebnf">
<a id="char_lit">char_lit</a>         = "'" ( <a href="#unicode_value" class="noline">unicode_value</a> | <a href="#byte_value" class="noline">byte_value</a> ) "'" .
<a id="unicode_value">unicode_value</a>    = <a href="#unicode_char" class="noline">unicode_char</a> | <a href="#little_u_value" class="noline">little_u_value</a> | <a href="#big_u_value" class="noline">big_u_value</a> | <a href="#escaped_char" class="noline">escaped_char</a> .
<a id="byte_value">byte_value</a>       = <a href="#octal_byte_value" class="noline">octal_byte_value</a> | <a href="#hex_byte_value" class="noline">hex_byte_value</a> .
<a id="octal_byte_value">octal_byte_value</a> = `\` <a href="#octal_digit" class="noline">octal_digit</a> <a href="#octal_digit" class="noline">octal_digit</a> <a href="#octal_digit" class="noline">octal_digit</a> .
<a id="hex_byte_value">hex_byte_value</a>   = `\` "x" <a href="#hex_digit" class="noline">hex_digit</a> <a href="#hex_digit" class="noline">hex_digit</a> .
<a id="little_u_value">little_u_value</a>   = `\` "u" <a href="#hex_digit" class="noline">hex_digit</a> <a href="#hex_digit" class="noline">hex_digit</a> <a href="#hex_digit" class="noline">hex_digit</a> <a href="#hex_digit" class="noline">hex_digit</a> .
<a id="big_u_value">big_u_value</a>      = `\` "U" <a href="#hex_digit" class="noline">hex_digit</a> <a href="#hex_digit" class="noline">hex_digit</a> <a href="#hex_digit" class="noline">hex_digit</a> <a href="#hex_digit" class="noline">hex_digit</a>
                           <a href="#hex_digit" class="noline">hex_digit</a> <a href="#hex_digit" class="noline">hex_digit</a> <a href="#hex_digit" class="noline">hex_digit</a> <a href="#hex_digit" class="noline">hex_digit</a> .
<a id="escaped_char">escaped_char</a>     = `\` ( "a" | "b" | "f" | "n" | "r" | "t" | "v" | `\` | "'" | `"` ) .
</pre>

<pre>
'a'
'ä'
'本'
'\t'
'\000'
'\007'
'\377'
'\x07'
'\xff'
'\u12e4'
'\U00101234'
'aa'         // 非法：太多的字符
'\xa'        // 非法：太少的十六进制数字
'\0'         // 非法：太少的八进制数字
'\uDFFF'     // 非法: surrogate half
'\U00110000' // 非法：不正确的Unicode代码点
</pre>


<h3 id="String_literals">字符串值</h3>

<p>
一个字符串值就是一系列的字符连接在一起的一个<a href="#Constants">字符串常量</a>。它有两种形式：一种是元字符串，一种是解释性字符串。
</p>
<p>
元字符串就是包括在两个方向单引号<code>``</code>内的字符序列。在引号内，除了反向单引号外其他字符都可以包括。一个元字符串的值就是将引号内的所有字符都不加解释滴看成是字符（UTF-8 字符）
而形成的字符串；比如说，不会将反斜杠看成特殊的字符；再者，里面可以包含换行符。元字符串中的回车符在字符串求值的过程中会被忽略掉。
</p>
<p>
解释性字符串是包括在双引号<code>&quot;&quot;</code>内的字符序列。双引号内不能包括换行，引号内文本会像分符值一样对反斜杠进行转义，当然限制也一样，就是<code>\'</code>和
<code>\"</code>这里也是合法的。3 个八进制<code>\</code><em>nnn</em>或是两个十六进制<code>\x</code><em>nn</em>都是对单个<em>字节</em>的转移表示；而其他的转义形式都指的是（可能是多个字节的）
UTF-8编码的单个<em>字符</em>。所以，在字符串值中的<code>\377</code>和<code>\xFF</code>都表示的是单个字节，值是<code>0xFF</code>=255；而<code>ÿ</code>、<code>\u00FF</code>、
<code>\U000000FF</code>和两个字节<code>0xc3</code>和<code>0xbf</code>表示的<code>\xc3\xbf</code>，其实都是对 UTF-8 字符 U+00FF 的表示。
</p>

<pre class="ebnf">
<a id="string_lit">string_lit</a>             = <a href="#raw_string_lit" class="noline">raw_string_lit</a> | <a href="#interpreted_string_lit" class="noline">interpreted_string_lit</a> .
<a id="raw_string_lit">raw_string_lit</a>         = "`" { <a href="#unicode_char" class="noline">unicode_char</a> | <a href="#newline" class="noline">newline</a> } "`" .
<a id="interpreted_string_lit">interpreted_string_lit</a> = `"` { <a href="#unicode_value" class="noline">unicode_value</a> | <a href="#byte_value" class="noline">byte_value</a> } `"` .
</pre>

<pre>
`abc`  // 等同于 "abc"
`\n
\n`    // 等同于 "\\n\n\\n"
"\n"
""
"Hello， world!\n"
"日本語"
"\u65e5本\U00008a9e"
"\xff\u00FF"
"\uD800"       // illegal: surrogate half
"\U00110000"   // illegal: invalid Unicode code point
</pre>

<p>
下面的例子的表示实际上是表示的一个东西：
</p>

<pre>
"日本語"                                 // UTF-8 文本
`日本語`                                 // UTF-8 元字分符本
"\u65e5\u672c\u8a9e"                    // 明确的 Unicode 代码点
"\U000065e5\U0000672c\U00008a9e"        // 明确的 Unicode 代码点
"\xe6\x97\xa5\xe6\x9c\xac\xe8\xaa\x9e"  // 明确的 Unicode 字节
</pre>

<p>
如果源文本使用两个代码点表示一个字符，比如组合一个重音和一个字母，那么如果将这个字符放入到符文值中会有问题（因为它不是一个代码点），而如果放在字符串中它占据两个代码点。
</p>


<h2 id="Constants">常量</h2>

<p>常量有<em>布尔常量</em>、<em>文符常量</em>、<em>整型常量</em>、<em>浮点常量</em>、<em>复数常量</em>，和<em>字符串常量</em>等。文符、整型、浮点和复数常量统称数值常量。</p>

<p>常量值会出现在很多地方，比如<a href="#Rune_literals">文符值</a>、<a href="#Integer_literals">整型值</a>、<a href="#Floating-point_literals">浮点值</a>、
<a href="#Imaginary_literals">虚数值</a>，或是<a href="#String_literals">字符串值</a>、指代常量的表达式、<a href="#Constant_expressions">常量表达式</a>、
常量结果的<a href="#Conversions">转换</a>，或是一些内置函数比如<code>unsafe.Sizeof</code>（可适用于任意类型）、<code>cap</code>/<code>len</code>（用于
<a href="#Length_and_capacity">一些表达式</a>）、<code>real</code>/<code>imag</code>（用于复数常量和虚数常量）的返回结果。布尔值可以用预声明的常量
<code>true</code>和<code>false</code>表示，预声明的标识符<a href="#Iota">iota</a>也用来表示常量。
</p>

<p>一般的，复数常量是<a href="#Constant_expressions">常量表达式</a>的一种，讨论也是放在那一节。</p>

<p>数值常量表示任意精度的值，不会溢出。因此，没有常量对应IEEE-754的负0、无穷和NAN值(not a number)。</p>

<p>常量可能是<a href="#Types">有类型的</a>或是无类型的。值常量、<code>true</code>、<code>false</code>、<code>iota</code>，和一些只包含无符号操作数的
<a href="#Constant_expressions">常量表达式</a>都是无符号的。
</p>

<p>
一个常量可能明确地来自于<a href="#Constant_declarations">常量声明</a>或是某个<a href="#Conversions">转换</a>，也可能隐式地出现在<a href="#Variable_declarations">变量声明</a>
中，或是在一个<a href="#Expressions">表达式</a>中被<a href="#Assignments">赋值</a>或是作为操作数。如果一个常量不能用它对应的类型来表示，这么这就是个错误。比如说<code>3.0</code>
既可以当做整数也可以当做浮点数，然而<code>2147483648.0</code> (等于<code>1&lt;&lt;31</code>)可以是<code>float32</code>、<code>float64</code>或是<code>uint32</code>类型，就是不能是
<code>int32</code>或是<code>string</code>类型。
</p>

<p>
并没有常量能代表 IEEE-754 的无穷大和非数值这两个值，但是<a href="/pkg/math/"><code>math</code>包</a>中的
<a href="/pkg/math/#Inf">Inf</a>、<a href="/pkg/math/#NaN">NaN</a>、<a href="/pkg/math/#IsInf">IsInf</a>、和<a href="/pkg/math/#IsNaN">IsNaN</a>
函数可以在运行时来返回或是测试这些值。
</p>

<p>
实现限制: 尽管我们说数值常量在语言中是任意精度的，但是一个编译器可能在实现的时候在内部只是用有限的精度来表示。不管怎么说，每一个实现必须满足：
</p>
<ul>
  <li>整型常量至少 256 比特位；</li>
  <li>浮点常量，也包括复数常量的一部分的浮点常量，至少应该有 256 比特位的尾数和一个 32 比特位的有符号指数部分；</li>
  <li>如果不能精确地表示某个整数常量，就给出一个错误；</li>
  <li>如果因为溢出不能表示一个浮点数或是复数常量，就给出一个错误；</li>
  <li>如果因为精度原因不能表示一个浮点数或是复数常量，那么就四舍五入到最近的那个能表示的常量。</li>
</ul>
<p>
这些需求适用于值常量和<a href="#Constant_expressions">常量表达式</a>的求值结果。
</p>

<h2 id="Types">类型</h2>

<p>
一种类型决定了一个值的可能的取值范围以及能对这个值所进行的操作。 一个类型由(可能要<a href="#Qualified_identifiers">限定</a>的)<em>类型名</em>(§<a href="#Type_declarations">类型声明</a>)
或是一个<em>类型文字</em>指定，它们本身又是由预声明的类型进行构造而得。
</p>

<pre class="ebnf">
<a id="Type">Type</a>      = <a href="#TypeName" class="noline">TypeName</a> | <a href="#TypeLit" class="noline">TypeLit</a> | "(" <a href="#Type" class="noline">Type</a> ")" .
<a id="TypeName">TypeName</a>  = <a href="#identifier" class="noline">identifier</a> | <a href="#QualifiedIdent" class="noline">QualifiedIdent</a> .
<a id="TypeLit">TypeLit</a>   = <a href="#ArrayType" class="noline">ArrayType</a> | <a href="#StructType" class="noline">StructType</a> | <a href="#PointerType" class="noline">PointerType</a> | <a href="#FunctionType" class="noline">FunctionType</a> | <a href="#InterfaceType" class="noline">InterfaceType</a> |
         <a href="#SliceType" class="noline">SliceType</a> | <a href="#MapType" class="noline">MapType</a> | <a href="#ChannelType" class="noline">ChannelType</a> .
</pre>

<p>
一些已经命名了的类型，比如布尔类型、数值类型和字符串类型，这些都是<a href="#Predeclared_identifiers">预声明</a>好的。
<em>复合类型</em> &mdash; 比如数组、结构体、指针、函数、接口、分片、映射和管道类型 &mdash; 需要使用已有的类型进行构造。
</p>

<p>
所谓的一个变量的<em>静态类型</em> (或是简单地说<em>类型</em>)就是它声明时候的类型。接口类型对应的变量有种特殊的<em>动态类型</em>之说，也就是说它的实际类型是在运行时候根据存的值所决定的。
动态类型在程序执行的过程中类型可能改变，只要它对于接口定义时所指定的静态类型是<a href="#Assignability">可赋值的</a>就可以。
</p>

<p>
每一个类型<code>T</code> 都有一个<em>底层类型</em>：如果类型<code>T</code>是个预定义的布尔、数值、字符串类型或是类型字面量，那么它对应的底层类型就是<code>T</code>本身。
否则， <code>T</code>的底层类型就是它在<a href="#Type_declarations">类型声明</a>时所指定的类型的底层类型。
</p>

<pre>
   type T1 string
   type T2 T1
   type T3 []T1
   type T4 T3
</pre>

<p>
<code>string</code>、<code>T1</code>和<code>T2</code>的底层类型是<code>string</code>。而<code>[]T1</code>、<code>T3</code>和<code>T4</code>的底层类型是<code>[]T1</code>。
</p>

<h3 id="Method_sets">方法集</h3>

<p>每一种类型都有其对应的<em>方法集</em>(§<a href="#Interface_types">接口类型</a>，§<a href="#Method_declarations">方法声明</a>)。<a href="#Interface_types">接口类型</a>的方法集就是它的接口。而其他类型比如<code>T</code>的方法集就是所有<code>T</code>作为接收器的<a href="#Method_declarations">方法</a>的集合；指针类型比如<code>*T</code>，的方法集是<code>*T</code>或是<code>T</code>作为接收器的所有方法的集合，这也就是说，指针的方法集包括其基类型<code>T</code>的方法集。包含匿名字段的结构体还有一些规则，我们会在<a href="#Struct_types">结构体类型</a>那里详细描述。除此之外的类型则是有一个空的方法集。在一个方法集中，每一个方法必须有<a href="#Uniqueness_of_identifiers">唯一的</a>不为<a href="#Blank_identifier">空</a>的<a href="#MethodName">方法名</a>。</p>

<p>一个类型的方法集决定了这种类型需要<a href="#Interface_types">实现</a>的接口，以及这种类型的接收器可以<a href="#Calls">调用</a>的方法。</p>

<h3 id="Boolean_types">布尔类型</h3>

<p><em>布尔类型</em>只能在预声明的常量<code>true</code>和<code>false</code>中取值，它对应的预声明类型是<code>bool</code>。</p>

<h3 id="Numeric_types">数值类型</h3>

<p><em>数值类型</em>包括整数值和浮点数值。预声明的与机器无关的数值类型有下面这些：</p>

<pre class="grammar">
uint8       无符号的 8 位整数 (0 ~ 255)
uint16      无符号的 16 位整数 (0 ~ 65535)
uint32      无符号的 32 位整数 (0 ~ 4294967295)
uint64      无符号的 64 位整数 (0 ~ 18446744073709551615)

int8        带符号的 8 位整数 (-128 ~ 127)
int16       带符号的 16 位整数 (-32768 ~ 32767)
int32       带符号的 32 位整数 (-2147483648 ~ 2147483647)
int64       带符号的 64 位整数 (-9223372036854775808 ~ 9223372036854775807)

float32     IEEE-754 32 位浮点数
float64     IEEE-754 64 位浮点数

complex64   由 float32 实部和虚部所能组成的复数
complex128  由 float64 实部和虚部所能组成的复数

byte        和 uint8 一样
rune        和 int32 一样
</pre>

<p>一个有<em>n</em>位的整数是说有<em>n</em>个比特位宽，并且采用<a href="http://en.wikipedia.org/wiki/Two's_complement">二进制补码</a>表示。</p>

<p>下面还有一些预声明的类型，但是它们的长度与具体实现有关：</p>

<pre class="grammar">
uint     32 位或是 64位
int      和 uint 长度一样
uintptr  一个无符号整数类型，它的长度可以容纳一个指针值
</pre>

<p>为了避免移植性的问题，所以除了<code>byte</code>和<code>uint8</code>的类型一样、<code>rune</code>和<code>int32</code>类型一样之外，其他的任意两种类型都是互相区分的。所以，在表达式中或是赋值的时候只要类型不一样就要进行转换。譬如说，假设在某一种机器实现上<code>int32</code>和<code>int</code>都是有符号的而且长度一样，但是在使用的时候也必须进行转换。</p>

<h3 id="String_types">字符串类型</h3>

<p><em>字符串类型</em>就是取值字符串的类型。字符串用起来像是分片，但是它们是不可修改的，也就是说一个字符串一旦创建，它的内容就是不变的了。预声明的字符串类型名字是<code>string</code>。

<p>字符串的元素的类型是<code>byte</code>，我们可以通过<a href="#Indexes">下标操作</a>来访问它们。对字符串的某个元素取地址是不允许的，比如<code>s[i]</code>是第<em>i</em>个元素，但<code>&amp;s[i]</code>操作是不允许的。字符串<code>s</code>的长度可以使用内置的函数<code>len</code>获得。一个字符串的长度在编译时就已确定了。</p>

<h3 id="Array_types">数组类型</h3>

<p>数组就是某种类型的一个序列，只不过序列中的每个元素都有一个编号。序列中元素的个数叫做长度，不能为负。</p>

<pre class="ebnf">
<a id="ArrayType">ArrayType</a>   = "[" <a href="#ArrayLength" class="noline">ArrayLength</a> "]" <a href="#ElementType" class="noline">ElementType</a> .
<a id="ArrayLength">ArrayLength</a> = <a href="#Expression" class="noline">Expression</a> .
<a id="ElementType">ElementType</a> = <a href="#Type" class="noline">Type</a> .
</pre>

<p>长度是数组类型的一部分，而且必须是能求出非负整数值的<a href="#Constant_expressions">常量表达式</a>。数组<code>a</code>的长度可以通过内置函数<a href="#Length_and_capacity"><code>len(a)</code></a>求得。数组元素的下标从0开始计算一直到<code>len(a)-1</code>(§<a href="#Indexes">下标</a>)。一个数组通常是一维的，但是也可以组成多维。</p>

<pre>
[32]byte
[2*N] struct { x， y int32 }
[1000]float64
[3][5]int
[2][2][2]float64  // 和 [2]([2]([2]float64)) 一个意思
</pre>

<h3 id="Slice_types">分片类型</h3>

<p>一个分片就是对一个数组上的连续一段的引用，它也是一个有编号的序列，元素取自对应的数组。一个分片类型指代的是其元素类型的数组的所有分片的集合。一个未初始化的分片的值是<code>nil</code>。</p>

<pre class="ebnf">
<a id="SliceType">SliceType</a> = "[" "]" <a href="#ElementType" class="noline">ElementType</a> .
</pre>

<p>像数组一样，分片也有个长度，也是通过下标进行访问。分片<code>s</code>的长度可以通过内置的函数<a href="#Length_and_capacity"><code>len(s)</code></a>取得。和数组不同的是，分片的长度在执行的过程中可以改变。分片元素的下标范围从0到<code>len(s)-1</code>(§<a href="#Indexes">下标</a>)。 对于同一个元素来说，在分片中的下标可能会比对应的底层数组的下标要小。</p>

<p>一个分片，一旦初始化后它总是关联着一个容纳其元素的底层数组。所以一个分片和它的数组共享存储，当然也和该数组的其他分片共享；需要注意的是，两个不同的数组总是代表不同的存储。</p>

<p>一个分片对应的底层数组可以能超出分片的范围。<em>容量</em>可以用来说明这种扩展：超过分片的范围但是又在数组范围内的部分；可以在原来分片(§<a href="#Slices">分片</a>)的基础上通过“再分片”获取一个扩大到数组容量的分片。一个分片<code>a</code>的容量可以通过内置的函数<a href="#Length_and_capacity"><code>cap(a)</code></a>取得。</p>

<p>一个新的未初始化的<code>T</code>类型的分片，可以使用内置函数<a href="#Making_slices_maps_and_channels"><code>make</code></a>在创建。make 带有一个分片的类型和指定长度和容量的参数，其中容量参数是可选的：</p>

<pre>
make([]T， length)
make([]T， length， capacity)
</pre>

<p>对<code>make</code>的调用会创建一个隐含的数组，分片就是引用的这个数组。这也意味着，执行</p>

<pre>
make([]T， length， capacity)
</pre>

<p>和下面的操作都分配一个数组并在基础上生成一个分片，生成的两个分片是相同的：</p>

<pre>
make([]int， 50， 100)
new([100]int)[0:50]
</pre>

<p>如同数组，分片通常是一维的，但是也可以复合构造更高维的对象。对于数组的数组来说，内层的数组的长度在构造的时候总是一样的，然而分片的分片(分片的数组)的长度却是可以变化的。此外，内层的分片需要单独创建。</p>

<h3 id="Struct_types">结构体类型</h3>

<p>
一个结构体就是一个命名的元素序列，每个元素又叫做字段，每个字段都有一个类型和名字。字段的名字可以是明确指定的（标识符列表），也可以能是隐含的（匿名字段）。
在一个结构体内部，只要是非<a href="#Blank_identifier">空白</a>字段的名字就必须是<a href="#Uniqueness_of_identifiers">唯一的</a>。
</p>

<pre class="ebnf">
<a id="StructType">StructType</a>     = "struct" "{" { <a href="#FieldDecl" class="noline">FieldDecl</a> ";" } "}" .
<a id="FieldDecl">FieldDecl</a>      = (<a href="#IdentifierList" class="noline">IdentifierList</a> <a href="#Type" class="noline">Type</a> | <a href="#AnonymousField" class="noline">AnonymousField</a>) [ <a href="#Tag" class="noline">Tag</a> ] .
<a id="AnonymousField">AnonymousField</a> = [ "*" ] <a href="#TypeName" class="noline">TypeName</a> .
<a id="Tag">Tag</a>            = <a href="#string_lit" class="noline">string_lit</a> .
</pre>

<pre>
// 空结构体
struct {}

// 有 6 个字段的结构体
struct {
  x， y int
  u float32
  _ float32  // 占位/填充
  A *[]int
  F func()
}
</pre>

<p>
一个字段声明的时候只有类型却没有名字，我们叫它为<em>匿名字段</em>，或是<em>嵌入</em>字段或是类型嵌入。一个嵌入的类型必须指定一个类型名<code>T</code>或是一个非接口的指针<code>*T</code>，而且<code>T</code>本身不能是指针类型。这些嵌入类型的类型名作为对应的字段名。
</p>

<pre>
// 带有四个匿名字段 T1， *T2， P.T3 和 *P.T4 的结构体
struct {
  T1        // field name is T1
  *T2       // field name is T2
  P.T3      // field name is T3
  *P.T4     // field name is T4
  x， y int  // field names are x and y
}
</pre>

<p>
下面的声明是不合法的，因为字段名在结构体中并不唯一：
</p>

<pre>
struct {
  T     // 和匿名字段 *T , *P.T 冲突
  *T    // 和匿名字段 T ,*P.T 冲突
  *P.T  // 和匿名字段 T , *T 冲突
}
</pre>

<p>
对于结构体<code>x</code>的一个匿名字段的字段或是<a href="#Method_declarations">方法</a> <code>f</code>，如果<code>x.f</code>是一个合法的<a href="#Selectors">选择子</a>（可能是一个字段或是一个方法<code>f</code>），我们就说，它被<em>提升</em>了。
</p>

<p>
提升后的字段用起来就赶脚是结构体的普通字段，只不过它们在结构体的<a href="#Composite_literals">复合表示</a>中不能用作字段名。
</p>

<p>
给一个结构体类型<code>S</code>和一个命名类型<code>T</code>，提升了的方法按照下面所说的包括在结构体的方法集中：
</p>
<ul>
  <li>
  如果<code>S</code>包括一个匿名字段<code>T</code>，那么<code>S</code>和<code>*S</code>的<a href="#Method_sets">方法集</a>都包括以<code>T</code>作为接收器而提升的方法.
  而<code>*S</code>的方法集又包括以<code>*T</code>为接收器提升的方法。
  </li>

  <li>
  如果<code>S</code>包括一个匿名字段<code>*T</code>，那么<code>S</code>和<code>*S</code>的<a href="#Method_sets">方法集</a>都包括以<code>T</code>或是<code>*T</code>
  作为接收器而提升的方法.
  </li>
</ul>

<p>
一个字段的声明中可以跟着一个可选的字符串<em>标签</em>，它在相应的字段声明中会算做字段的一种属性/性质。这些标签在<a href="#Package_unsafe">反射接口</a>和<a href="#Type_identity">类型一致</a>那里中是可见的，其他的时候可以认为是忽略不计的。
</p>

<pre>
// 一个用于时间戳协议缓冲区的结构体
// 标签字符串定义了协议缓冲区字段号
struct {
  microsec  uint64 "field 1"
  serverIP6 uint64 "field 2"
  process   string "field 3"
}
</pre>

<h3 id="Pointer_types">指针类型</h3>

<p>
一个指针就是可以指向其他类型变量的变量。被指向的变量的类型叫做指针的<em>基类型</em>；如果么有初始化的话，指针值是<code>nil</code>。
</p>

<pre class="ebnf">
<a id="PointerType">PointerType</a> = "*" <a href="#BaseType" class="noline">BaseType</a> .
<a id="BaseType">BaseType</a> = <a href="#Type" class="noline">Type</a> .
</pre>

<pre>
*Point
*[4]int
</pre>

<h3 id="Function_types">函数类型</h3>

<p>一个函数类型指代的是带有相同参数和返回值类型的一类函数。一个未初始化的函数变量的值是<code>nil</code>。</p>

<pre class="ebnf">
<a id="FunctionType">FunctionType</a>   = "func" <a href="#Signature" class="noline">Signature</a> .
<a id="Signature">Signature</a>      = <a href="#Parameters" class="noline">Parameters</a> [ <a href="#Result" class="noline">Result</a> ] .
<a id="Result">Result</a>         = <a href="#Parameters" class="noline">Parameters</a> | <a href="#Type" class="noline">Type</a> .
<a id="Parameters">Parameters</a>     = "(" [ <a href="#ParameterList" class="noline">ParameterList</a> [ "，" ] ] ")" .
<a id="ParameterList">ParameterList</a>  = <a href="#ParameterDecl" class="noline">ParameterDecl</a> { "，" <a href="#ParameterDecl" class="noline">ParameterDecl</a> } .
<a id="ParameterDecl">ParameterDecl</a>  = [ <a href="#IdentifierList" class="noline">IdentifierList</a> ] [ "..." ] <a href="#Type" class="noline">Type</a> .
</pre>

<p>在函数的参数/结果列表中，名字（标识符列表）可以都有也可以都么有。如果有的话，一个名字代表对应类型的一项（参数/结果），非<a href="#Blank_identifier">空</a>名称必须不相同；如果没有，一个类型代表该类型的一项。参数/结果列表通常用小括号括起来，不过当只有一个返回值且没有名字的情况下，这个括号可以省略掉。</p>

<p>一个函数签名的最后一个参数可能以<code>...</code>为前缀，这样的函数我们叫<em>可变</em>函数，它们在调用的时候对于那个参数可以传递0或是多个值。</p>

<pre>
func()
func(x int) int
func(a， _ int， z float32) bool
func(a， b int， z float32) (bool)
func(prefix string， values ...int)
func(a， b int， z float64， opt ...interface{}) (success bool)
func(int， int， float64) (float64， *[]int)
func(n int) func(p *T)
</pre>


<h3 id="Interface_types">接口类型</h3>

<p>一个接口类型指定了一个称为<em>接口</em>的<a href="#Method_sets">方法集</a>。一个接口类型的变量可以存某个类型的值，只要这种类型的方法集是接口方法集的超集；这样的一种类型，我们说它<em>实现了接口</em>.一个无初始化的接口的值为<code>nil</code>。</p>

<pre class="ebnf">
<a id="InterfaceType">InterfaceType</a>      = "interface" "{" { <a href="#MethodSpec" class="noline">MethodSpec</a> ";" } "}" .
<a id="MethodSpec">MethodSpec</a>         = <a href="#MethodName" class="noline">MethodName</a> <a href="#Signature" class="noline">Signature</a> | <a href="#InterfaceTypeName" class="noline">InterfaceTypeName</a> .
<a id="MethodName">MethodName</a>         = <a href="#identifier" class="noline">identifier</a> .
<a id="InterfaceTypeName">InterfaceTypeName</a>  = <a href="#TypeName" class="noline">TypeName</a> .
</pre>

<p>在一个接口类型中对于所有的方法集，每一个方法必须有<a href="#Uniqueness_of_identifiers">唯一的</a>非<a href="#Blank_identifier">空</a>名字。</p>

<pre>
// 一个简单的文件接口
interface {
  Read(b Buffer) bool
  Write(b Buffer) bool
  Close()
}
</pre>

<p>
可以有多种类型都实现了一个接口。比如，如果<code>S1</code>和<code>S2</code>都有方法集：
</p>

<pre>
func (p T) Read(b Buffer) bool { return … }
func (p T) Write(b Buffer) bool { return … }
func (p T) Close() { … }
</pre>

<p>
(其中<code>T</code>代表<code>S1</code>或是<code>S2</code>)那么，<code>File</code>接口就是被<code>S1</code>和<code>S2</code>都实现了，而我们并不再去关心<code>S1</code>和<code>S2</code>
是否是有其他方法或是共享了其他神马方法。
</p>

<p>一个类型实现了一个接口，只要它的所有方法中的一个子集是接口的方法即可；所以，一种类型可能实现了多个接口。比如说，所有的类型都实现了<em>空接口</em>:</p>

<pre>
interface{}
</pre>

<p>
类似的，考虑下面的接口说明，这个说明出现在<a href="#Type_declarations">类型声明</a>中，这个类型声明定义了一个叫做<code>Lock</code>的接口:
</p>

<pre>
type Lock interface {
  Lock()
  Unlock()
}
</pre>

<p>如果<code>S1</code>和<code>S2</code>都实现了</p>

<pre>
func (p T) Lock() { … }
func (p T) Unlock() { … }
</pre>

<p>
那么，它们就实现了<code>Lock</code>接口，当然它们也实现了<code>File</code>接口（看上面）。
</p>
<p>
一个接口<code>T</code>可以使用一个（可能带限定的）接口类型<code>E</code>来代替一系列方法说明，我们叫<code>T</code>中嵌入了接口<code>E</code>；这样做意味着把<code>E</code>中所有（导出和非导出）的方法添加到<code>T</code>中。
</p>

<pre>type ReadWriter interface {
  Read(b Buffer) bool
  Write(b Buffer) bool
}

type File interface {
  ReadWrite  // 和一一枚举 ReadWrite 中的方法效果一样
  Lock       // 和一一枚举 Lock 中的方法效果一样
  Close()
}

type LockedFile interface {
  Locker
  File        // 不合法: Lock 不唯一
  Lock()      // 不合法: Lock 不唯一
}
</pre>

<p>
一个接口类型<code>T</code>不能自身嵌套在自身之中，或是递归地嵌套一个包含它自身<code>T</code>的接口。
</p>

<pre>
// 非法：不能自身嵌套
type Bad interface {
  Bad
}

// 非法：Bad1 不能通过 Bad2 来嵌套自身
type Bad1 interface {
  Bad2
}
type Bad2 interface {
  Bad1
}
</pre>

<h3 id="Map_types">映射类型</h3>

<p>
一个 map/映射是一群无序的元素构成的组，这些元素的类型以一种类型的值作为唯一的索引<em>key</em>然后访问到另一种类型的某个值。一个未初始化的映射变量的值为<code>nil</code>。
</p>

<pre class="ebnf">
<a id="MapType">MapType</a>     = "map" "[" <a href="#KeyType" class="noline">KeyType</a> "]" <a href="#ElementType" class="noline">ElementType</a> .
<a id="KeyType">KeyType</a>     = <a href="#Type" class="noline">Type</a> .
</pre>

<p>
对于 kye/关键字类型的比较运算符<code>==</code> and <code>!=</code>(§<a href="#Comparison_operators">比较运算符</a>) 必须是完整定义的；于是 key 的类型不能是函数、映射或是分片。
如果 key 的类是一个接口的话，这两个比较运算符应该对动态的两个 key 值是完整定义的；失败会引起一个<a href="#Run_time_panics">运行时问题</a>。
</p>

<pre>
map[string]int
map[*T]struct{ x， y float64 }
map[string]interface{}
</pre>

<p>
map 元素的个数叫做它的长度。对于一个 map <code>m</code>我们可以通过一个内置函数<a href="#Length_and_capacity"><code>len(m)</code></a>访问它的长度，
不过它的长度在执行过程中可能会发生变化。元素可以在<a href="#Assignments">赋值</a>的时候进行添加，可以通过使用<a href="#Indexes">索引/下标</a>表达式来获取；
我们也可以使用内置的函数<a href="#Deletion_of_map_elements"><code>delete</code></a>来删除元素。
</p>
<p>
一个新的空的 map 值可以使用内置的函数<a href="#Making_slices_maps_and_channels"><code>make</code></a>来构造，这个函数带有 map 的类型和一个可选的容量长度作为参数：
</p>

<pre>
make(map[string]int)
make(map[string]int， 100)
</pre>

<p>
一个初始过的 map 的容量不受尺寸的限制：map 根据存的东西的多少会自我调整，当然有个例外就是<code>nil</code>。
<code>nil</code> map 等价于一个空 map，只不过它还不能添加任何元素。
may be added.

<h3 id="Channel_types">管道类型</h3>

<p>
管道提供了一种两个并发执行的函数进行同步执行或是通信的机制。管道里面只能传输某一种指定类型的值，初始化的管道的值是<code>nil</code>。
</p>

<pre class="ebnf">
<a id="ChannelType">ChannelType</a> = ( "chan" [ "&lt;-" ] | "&lt;-" "chan" ) <a href="#ElementType" class="noline">ElementType</a> .
</pre>

<p>
<code>&lt;-</code>运算符指定了管道中输出传输的<em>方向</em>：<em>发送</em>或是<em>接收</em>。如果管道的方向并没有指定的话，那么就认为是<em>双向的</em>。
管道经过<a href="#Conversions">装换</a>或是<a href="#Assignments">赋值</a>后可能就变成只能发送或是只能接收的了。
</p>

<pre>
chan T          // 可以发送或是接收 T 类型的数据
chan&lt;- float64  // 只能发送 float64 数据
&lt;-chan int      // 只能接收 int 数据
</pre>

<p>
<code>&lt;-</code>尽可能地左结合<code>chan</code>：
</p>

<pre>
chan&lt;- chan int    // 等同于 chan&lt;- (chan int)
chan&lt;- &lt;-chan int  // 等同于 chan&lt;- (&lt;-chan int)
&lt;-chan &lt;-chan int  // 等同于 &lt;-chan (&lt;-chan int)
chan (&lt;-chan int)
</pre>

<p>
一个新的未初始化的管道可以使用<a href="#Making_slices_maps_and_channels"><code>make</code></a>进行构造，构造的时候需要指定管道中数据的类型，而管道的容量则是可选的，
也就是可以指定可以不指定：
</p>

<pre>
make(chan int， 100)
</pre>

<p>
容量 —— 也就是管道中元素的个数，指定了管道中的缓冲区的大小。如果容量大于 0，那么管道就是异步的，也就是说只有满的时候阻塞发送、空的时候阻塞接收，而其他的时候不阻塞；
当然，元素的接收顺序和发送的顺序一致。如果容量是 0 或是不指定，那么，只有在发送和接收都准备好的时候，通信正常进行，否则都进行阻塞。
一个<code>nil</code>管道不能进行通信。
</p>

<p>
管道可以通过内置的函数<a href="#Close"><code>close</code></a>进行关闭；而对管道是否关闭的测试可以通过<a href="#Receive_operator">接收操作符</a>的多值赋值来实现。
</p>

<h2 id="Properties_of_types_and_values">类型以及值的属性</h2>

<h3 id="Type_identity">类型一致</h3>

<p>两种类型要么它们是<em>一致的</em>，要么它们是<em>不同的</em>。</p>

<p>
两个命名类型一致只有当它们可以追溯到相同的<a href="#Type_declarations">TypeSpec</a>。 一个命名类型和一个无名类型总是不同的类型。两个无名类型如果它们对应的类型字面量是一致的，也就是它们要有相同的结构以及每一部分都是相同的，那么它们就是相同类型</p>。 详述如下：

<ul>
  <li>两个数组类型当它们的元素类型以及长度相同时，那么它们是相同类型。</li>
  <li>两个分片类型只要它们的元素类型相同，那么它们就是相同类型。</li>
  <li>两个结构体类型相同，需要它们有相同的字段序列，对一个的字段具有相同的名称、类型以及标签。两个匿名字段算是相同的名称。不同包的小写的字段名总认为是不同的。</li>
  <li>两个指针类型当它们的基类型是相同的，那么它们就是相同的。</li>
  <li>两个函数类型是相同的，需要它们有相同的参数个数和返回值，参数以及返回值的类型也需要相同；它们要么都是可变参数，要么都不是。参数和返回值的名称不需要相同。</li>
  <li>两个接口类型是相同的，需要它们有相同的方法集。不同包的小写方法名总认为是不同的。方法集中的方法顺序无关紧要。</li>
  <li>两个map类型当它们有相同的key和value类型，那么它们是相同类型。</li>
  <li>两个管道类型当它们有相同的值类型以及方向，那么它们是相同类型</li>
</ul>

<p>
给一些声明：
</p>

<pre>
type (
  T0 []string
  T1 []string
  T2 struct{ a， b int }
  T3 struct{ a， c int }
  T4 func(int， float64) *T0
  T5 func(x int， y float64) *[]string
)
</pre>

<p>
下面这些类型是的等价的：
</p>

<pre>
T0 和 T0
[]int 和 []int
struct{ a， b *T5 } 和 struct{ a， b *T5 }
func(x int， y float64) *[]string 和 func(int， float64) (result *[]string)
</pre>

<p>
<code>T0</code>和<code>T1</code>是不同的类型，因为它们是不同声明中的命名类型。<code>func(int， float64) *T0</code> 和<code>func(x int， y float64) *[]string</code>
是不同类型，因为<code>T0</code>的类型不同于<code>[]string</code>。
</p>

<h3 id="Assignability">可赋值</h3>
<p>
只有在下面的情况下，一个值<code>x</code>才可以<em>赋值</em>给一个<code>T</code>类型的变量，或是说<code>x</code>对于<code>T</code>是可赋值的：
</p>

<ul>
<li>
<code>x</code>的类型和<code>T</code>的类型一样；
</li>
<li>
<code>x</code>的类型<code>V</code>和<code>T</code>有一样的<a href="#Types">底层类型</a>，并且<code>V</code>和<code>T</code>至少有一个不是有名类型；
</li>
<li>
<code>T</code>是一个接口类型，而<code>x</code> <a href="#Interface_types">实现了</a>接口<code>T</code>；
</li>
<li>
<code>x</code>是双向管道，而<code>T</code>是个管道类型，<code>x</code>的类型<code>V</code>和<code>T</code>有相同的元素类型，并且<code>V</code>和<code>T</code>
至少有一个不是有名类型；
</li>
<li>
<code>x</code>是预声明的值<code>nil</code>，而<code>T</code>是指针、函数、分片、映射、管道或是接口类型；
</li>
<li>
<code>x</code>是一个无类型的<a href="#Constants">constant</a>，可以表示<code>T</code>类型的值。
</li>
</ul>

<p>
任何一个值都可以赋值给<a href="#Blank_identifier">空标识符</a>。
</p>


<h2 id="Blocks">块</h2>

<p>
一个<em>块</em>就是放置在一对大括号内的一系列声明和语句。
</p>

<pre class="ebnf">
<a id="Block">Block</a> = "{" { <a href="#Statement" class="noline">Statement</a> ";" } "}" .
</pre>

<p>
除了源文本中明确的块之外，还有一些不显眼的块：
</p>

<ol>
  <li>包围着 Go 源文本的<em>整体块</em>；</li>

  <li>任何一个<a href="#Packages">package</a>都有一个将包中的所有源文本包住的<em>包块</em>。</li>

  <li>任何一个文件都有一个将文件中的所有 Go 源文本包住的<em>文件块</em>。</li>

  <li>每一个<code>if</code>、<code>for</code>和<code>switch</code>语句都认为它们在一个隐含的块之中。</li>

  <li>在<code>switch</code>或是<code>select</code>语句中的每个子句都像是个隐式块。</li>
</ol>

<p>
块可以嵌套而且影响<a href="#Declarations_and_scope">作用域</a>。
</p>


<h2 id="Declarations_and_scope">声明和作用域</h2>

<p>一个声明绑定了一个非<a href="#Blank_identifier">空</a>的标识符至一个常量、类型、变量、函数或是包。程序中的每一个标识符都必须声明。相同的块中同一个标识符不能声明两次，文件块和包块不能声明相同的标识符。</p>

<pre class="ebnf">
<a id="Declaration">Declaration</a>   = <a href="#ConstDecl" class="noline">ConstDecl</a> | <a href="#TypeDecl" class="noline">TypeDecl</a> | <a href="#VarDecl" class="noline">VarDecl</a> .
<a id="TopLevelDecl">TopLevelDecl</a>  = <a href="#Declaration" class="noline">Declaration</a> | <a href="#FunctionDecl" class="noline">FunctionDecl</a> | <a href="#MethodDecl" class="noline">MethodDecl</a> .
</pre>

<p>一个标识符的<em>域</em>指的是标识符在文件内的影响的范围。</p>

<p>Go的作用域是分块的：</p>

<ol>
  <li>预声明的标识符的域是一个全局的块；</li>
  <li>顶层(在函数外的)的常量、类型、变量、函数(不包括方法)的域是包块；</li>
  <li>导入包的标识符的域，是导入的文件的文件块；</li>
  <li>函数参数或是返回值变量的域，是整个函数体；</li>
  <li>函数内的常量或是变量标识符开始于声明的位置，结束于所在块的最右侧；</li>
  <li>函数内的类型标识符开始于类型声明处，结束于所在块的最右侧；</li>
</ol>

<p>一个块的标识符可以在内层块中再声明，这种情况下标识符的域是在内层块的域。</p>

<p><a href="#Package_clause">package</a>并不是一个声明。包名不属于任何域。它的意义就是标识某一个文件所属的<a href="#Packages">包</a>，以及指定导入声明的默认包名。</p>

<h3 id="Label_scopes">Label域</h3>

<p><a href="#Labeled_statements">label语句</a>用来声明标号，它们会用在<code>break</code>， <code>continue</code>， and <code>goto</code>语句中(§<a href="#Break_statements">break语句</a>， §<a href="#Continue_statements">continue语句</a>， §<a href="#Goto_statements">goto语句</a>)。声明一个标号但是不使用是不允许的。和其他的标识符不同的是，标号并不是块作用域，它不会与其他的非标号冲突。标号的域是所在函数的函数体，但不包含嵌套函数的函数体。</p>


<h3 id="Blank_identifier">空标识符/通配符</h3>
<p>
<em>空标识符/通配符</em>，使用下划线表示 <code>_</code>，它可以像其他标识符一样用在声明之中，不过空标识符在声明中并不会将名字和值的绑定。
</p>

<h3 id="Predeclared_identifiers">预声明的标识符</h3>

<p>
下面的一些标识符在<a href="#Blocks">通用块</a>中预声明了:
</p>
<pre class="grammar">
类型:
  bool byte complex64 complex128 error float32 float64
  int int8 int16 int32 int64 rune string
  uint uint8 uint16 uint32 uint64 uintptr

常量:
  true false iota

0 值:
  nil

函数:
  append cap close complex copy delete imag len
  make new panic print println real recover
</pre>


<h3 id="Exported_identifiers">导出的标识符</h3>

<p>
一个标志符被<em>导出</em>后就可以在其他包中使用，但是必须满足下面两个条件：
</p>
<ol>
  <li>标识符的首字母是 Unicode 大写字母 (Unicode "Lu" 类); 而且</li>
  <li>标识符要在<a href="#Blocks">包块</a>中进行了声明，或是它是个<a href="#Struct_types">字段名</a> /<a href="#MethodName">方法名</a>。</li>
</ol>
<p>
而其他所有的标识符都不是导出的。
</p>


<h3 id="Uniqueness_of_identifiers">唯一的标识符</h3>

<p>
给定一些标识符，如果在这些中某一个<em>不同</em>于其他一个，我们就说它是<em>唯一的</em>。如果两个标识符拼写都不一样，那么肯定是不同的，或者是它们处于不同的<a href="#Packages">包</a>
之内而又没有被<a href="#Exported_identifiers">导出</a>，这也是不同的；除此之外的，就认为是相同的标识符。
</p>

<h3 id="Constant_declarations">常量声明</h3>

<p>常量声明绑定一系列标识符到一系列<a href="#Constant_expressions">常量表达式</a>的值。标识符的数目应该和表达式的数目相等，第<em>n</em>个标识符绑定到第<em>n</em>个表达式。</p>

<pre class="ebnf">
<a id="ConstDecl">ConstDecl</a>      = "const" ( <a href="#ConstSpec" class="noline">ConstSpec</a> | "(" { <a href="#ConstSpec" class="noline">ConstSpec</a> ";" } ")" ) .
<a id="ConstSpec">ConstSpec</a>      = <a href="#IdentifierList" class="noline">IdentifierList</a> [ [ <a href="#Type" class="noline">Type</a> ] "=" <a href="#ExpressionList" class="noline">ExpressionList</a> ] .

<a id="IdentifierList">IdentifierList</a> = <a href="#identifier" class="noline">identifier</a> { "，" <a href="#identifier" class="noline">identifier</a> } .
<a id="ExpressionList">ExpressionList</a> = <a href="#Expression" class="noline">Expression</a> { "，" <a href="#Expression" class="noline">Expression</a> } .
</pre>

<p>如果指定了类型，那么所有的常量都是指定的类型，而且表达式对于类型来说得是<a href="#Assignability">可赋值的</a>。如果类型没有指定，那么常量取的是表达式对应的类型。如果表达式是无类型<a href="#Constants">常量</a>，那么声明的常量也是无类型的，常量值就是表达式的值。举个例子，如果表达式是一个浮点数字面量，那么常量标识符就是一个浮点数常量，尽管小数部分为0。</p>

<pre>
const Pi float64 = 3.14159265358979323846
const zero = 0.0         // untyped floating-point constant
const (
  size int64 = 1024
  eof        = -1  // untyped integer constant
)
const a， b， c = 3， 4， "foo"  // a = 3， b = 4， c = "foo"， untyped integer and string 常量
const u， v float32 = 0， 3    // u = 0.0， v = 3.0
</pre>

<p>在带括号的<code>常量</code>声明中，表达式列表除了第一个之外其他的可以省略。这种情况下省略的表达式等价于前置的第一个非空表达式的文本替换，省略表达式等价于重复前面的。标识符的数量应该等于表达式的数量。<a href="#Iota"><code>iota</code></a>提供了一种生成序列常量值的机制：
</p>

<pre>
const (
  Sunday = iota
  Monday
  Tuesday
  Wednesday
  Thursday
  Friday
  Partyday
  numberOfDays  // this constant is not exported
)
</pre>


<h3 id="Iota">iota</h3>

<p>
在 <a href="#Constant_declarations">常量声明</a>中， 预定义标识符<code>iota</code> 代表了连续的无类型整数<a href="#Constants">
常量</a>. 当在源代码中一个遇到<a href="#ConstSpec">常量声明</a>的保留字 <code>const</code>它就会被置为0，然后依次增加。
它可以用来构造一系列常量：</p>

<pre>
const (  // iota 重置为 0
  c0 = iota  // c0 == 0
  c1 = iota  // c1 == 1
  c2 = iota  // c2 == 2
)

const (
  a = 1 &lt;&lt; iota  // a == 1 (iota 又被重置)
  b = 1 &lt;&lt; iota  // b == 2
  c = 1 &lt;&lt; iota  // c == 4
)

const (
  u         = iota * 42  // u == 0     (无类型整型常量)
  v float64 = iota * 42  // v == 42.0  (float64 常量)
  w         = iota * 42  // w == 84    (无类型整型常量)
)

const x = iota  // x == 0 (iota 被重置)
const y = iota  // y == 0 (iota 被重置)
</pre>

<p>
在常量列表中， 每一个<code>iota</code>的值是相同的，因为前面说了， 它只会在常量声明之后增加：
</p>

<pre>
const (
  bit0， mask0 = 1 &lt;&lt; iota， 1&lt;&lt;iota - 1  // bit0 == 1， mask0 == 0
  bit1， mask1                           // bit1 == 2， mask1 == 1
  _， _                                  // 跳过 iota == 2
  bit3， mask3                           // bit3 == 8， mask3 == 7
)
</pre>

<p>上面这个例子利用了隐式地最后一个非空表达式的重复。</p>


<h3 id="Type_declarations">类型声明</h3>

<p>一个类型声明绑定一个标识符，<em>类型名</em>，至一个新的类型。新的类型和其<a href="#Types">底层类型</a>是一样的，但<a href="#Type_identity">不同于</a>已经存在的类型。</p>

<pre class="ebnf">
<a id="TypeDecl">TypeDecl</a>     = "type" ( <a href="#TypeSpec" class="noline">TypeSpec</a> | "(" { <a href="#TypeSpec" class="noline">TypeSpec</a> ";" } ")" ) .
<a id="TypeSpec">TypeSpec</a>     = <a href="#identifier" class="noline">identifier</a> <a href="#Type" class="noline">Type</a> .
</pre>

<pre>
type IntArray [16]int

type (
  Point struct{ x， y float64 }
  Polar Point
)

type TreeNode struct {
  left， right *TreeNode
  value *Comparable
}

type Block interface {
  BlockSize() int
  Encrypt(src， dst []byte)
  Decrypt(src， dst []byte)
}
</pre>

<p>声明的类型不会继承已有类型的<a href="#Method_declarations">方法</a>，但是接口类型或是复合类型的元素的<a href="#Method_sets">方法集</a>是不变的。</p>

<pre>
// A Mutex is a data type with two methods， Lock and Unlock.
type Mutex struct         { /* Mutex fields */ }
func (m *Mutex) Lock()    { /* Lock implementation */ }
func (m *Mutex) Unlock()  { /* Unlock implementation */ }

// NewMutex has the same composition as Mutex but its method set is empty.
type NewMutex Mutex

// The method set of the <a href="#Pointer_types">base type</a> of PtrMutex remains unchanged，
// but the method set of PtrMutex is empty.
type PtrMutex *Mutex

// The method set of *PrintableMutex contains the methods
// Lock and Unlock bound to its anonymous field Mutex.
type PrintableMutex struct {
  Mutex
}

// MyBlock is an interface type that has the same method set as Block.
type MyBlock Block
</pre>

<p>一个类型声明还可以用来定义不同的布尔值、数值、字符串类型，然后给它们添加方法：</p>

<pre>
type TimeZone int

const (
  EST TimeZone = -(5 + iota)
  CST
  MST
  PST
)

func (tz TimeZone) String() string {
  return fmt.Sprintf("GMT+%dh"， tz)
}
</pre>


<h3 id="Variable_declarations">变量声明</h3>

<p>
一个变量声明创建一个变量，并绑定一个标识符到该变量；声明的时候需要指定类型，而初始值则是可选的。
</p>
<pre class="ebnf">
<a id="VarDecl">VarDecl</a>     = "var" ( <a href="#VarSpec" class="noline">VarSpec</a> | "(" { <a href="#VarSpec" class="noline">VarSpec</a> ";" } ")" ) .
<a id="VarSpec">VarSpec</a>     = <a href="#IdentifierList" class="noline">IdentifierList</a> ( <a href="#Type" class="noline">Type</a> [ "=" <a href="#ExpressionList" class="noline">ExpressionList</a> ] | "=" <a href="#ExpressionList" class="noline">ExpressionList</a> ) .
</pre>

<pre>
var i int
var U， V， W float64
var k = 0
var x， y float32 = -1， -2
var (
  i       int
  u， v， s = 2.0， 3.0， "bar"
)
var re， im = complexSqrt(-1)
var _， found = entries[name]  // map 查找；这里只对 "found" 感兴趣
</pre>

<p>如果指定了初始化表达式列表，那么变量就按顺序使用表达式进行<a href="#Assignments">赋值</a>；所有的表达式都会用来初始化某个变量，没有对应表达式的变量会初始化为<a href="#The_zero_value">0值</a>。</p>

<p>如果类型指定，那么每个变量都是那种类型。否则的话，类型通过对表达式列表进行推断而得。</p>

<p>
如果类型没有指定而且对应的表达式求得的是一个<a href="#Constants">常量</a>，那么这个声明的变量取§<a href="#Assignments">赋值</a>这里描述的类型。
</p>

<p>
实现限制：一个编译器可以不允许在<a href="#Function_declarations">函数体</a>内声明变量但是却从来不适用的情况。
</p>

<h3 id="Short_variable_declarations">短变量声明</h3>

<p>可以使用<em>短变量声明</em>：</p>

<pre class="ebnf">
<a id="ShortVarDecl">ShortVarDecl</a> = <a href="#IdentifierList" class="noline">IdentifierList</a> ":=" <a href="#ExpressionList" class="noline">ExpressionList</a> .
</pre>

<p>它是一个<a href="#Variable_declarations">变量声明</a>不带类型的简化版：</p>

<pre class="grammar">
"var" IdentifierList = ExpressionList .
</pre>

<pre>
i， j := 0， 10
f := func() int { return 7 }
ch := make(chan int)
r， w := os.Pipe(fd)  // os.Pipe() 返回两个值
_， y， _ := coord(p)  // coord() 返回三个值，不过只关心 y 而已
</pre>

<p>不像其他的变量声明，短变量声明可能重复声明一个在相同块下的相同类型的变量，这种重复声明只能出现在多变量短声明中。重复声明不会引入一个新的变量，它只是给原来的变量赋了一个新值。</p>

<pre>
field1， offset := nextField(str， 0)
field2， offset := nextField(str， offset)  // 重新声明 offset
a, a := 1, 2                              // 不允许: a 进行了两次声明，或是 a 在别处声明过但此处没有声明新变量
</pre>

<p>短变量声明只能出现在函数内部。在一些地方譬如<code>if</code>、<code>for</code>和<code>switch</code>的初始化中，可以用来声明临时变量(§<a href="#Statements">语句</a>)。</p>

<h3 id="Function_declarations">函数声明</h3>

<p>函数声明将一个标识符也就是<em>函数名</em>和一个具体的函数绑定到一起。</p>

<pre class="ebnf">
<a id="FunctionDecl">FunctionDecl</a> = "func" <a href="#FunctionName" class="noline">FunctionName</a> ( <a href="#Function" class="noline">Function</a> | <a href="#Signature" class="noline">Signature</a> ) .
<a id="FunctionName">FunctionName</a> = <a href="#identifier" class="noline">identifier</a> .
<a id="Function">Function</a>     = <a href="#Signature" class="noline">Signature</a> <a href="#FunctionBody" class="noline">FunctionBody</a> .
<a id="FunctionBody">FunctionBody</a> = <a href="#Block" class="noline">Block</a> .
</pre>

<p>如果函数<a href="#Function_types">签名</a>中指定了返回值参数，那么函数体的语句必须最后以<a href="#Terminating_statements">终结语句</a>结束。</p>

<pre>func IndexRune(s string, r rune) int {
  for i, c := range s {
    if c == r {
      return i
    }
  }
  // invalid: 缺少返回语句
}
</pre>

<p>一个函数声明可以没有函数体，这样的函数声明只是提供了函数调用时的签名，而真正的函数甚至可以是go语言之外实现的，比如一个汇编例程。</p>

<pre>
func min(x int， y int) int {
  if x &lt; y {
    return x
  }
  return y
}

func flushICache(begin， end uintptr)  // 外部实现
</pre>

<h3 id="Method_declarations">方法声明</h3>

<p>方法就是带<em>接收器</em>的函数。方法声明绑定一个标识符就是<em>方法名</em>到一个方法，同时它也方法和把接收器的<em>基类型</em>关联了起来。</p>

<pre class="ebnf">
<a id="MethodDecl">MethodDecl</a>   = "func" <a href="#Receiver" class="noline">Receiver</a> <a href="#MethodName" class="noline">MethodName</a> ( <a href="#Function" class="noline">Function</a> | <a href="#Signature" class="noline">Signature</a> ) .
<a id="Receiver">Receiver</a>     = <a href="#Parameters" class="noline">Parameters</a> .
</pre>

<p>在方法名之前指定的参数就是方法的接收器，这里的参数必须是单个不可变的，类型必须是<code>T</code>或是<code>*T</code>的形式，其中<code>T</code>是一个类型名。类型<code>T</code>被称为接收器的<em>基类型</em>，它不能是一个指针或是接口类型，而且它必须和方法处于相同的包下。我们会说方法<em>绑定</em>到了基类型上，方法名只对类型<code>T</code>或是<code>*T</code>的<a href="#Selectors">选择子</a>是可见的。</p>

<p>绑定到基类型的方法的非<a href="#Blank_identifier">空</a>名字必须是<a href="#Uniqueness_of_identifiers">唯一的</a>。如果接收器的值并没有在方法内部使用到，那么声明中的标识符可以省略；这条规则也适用于函数和方法的参数。如果基类型是<a href="#Struct_types">结构体类型</a>，那么非空的方法名和字段名必须是不同的。</p>

<p>
如果<code>Point</code>是一个类型，那么下面的声明
</p>

<pre>
func (p *Point) Length() float64 {
  return math.Sqrt(p.x * p.x + p.y * p.y)
}

func (p *Point) Scale(factor float64) {
  p.x *= factor
  p.y *= factor
}
</pre>

<p>绑定了<code>Length</code>和<code>Scale</code>方法到接收器类型<code>*Point</code>，基类型是<code>Point</code>。</p>

<p>方法的类型是一个函数类型，接收器是其第一个参数。譬如说，方法<code>Scale</code>的类型是</p>

<pre>
func(p *Point， factor float64)
</pre>

<p>但是这样的函数声明不能算作一个方法。</p>

<h2 id="Expressions">表达式</h2>

<p>表达式是求一系列操作数的运算结果或是函数值。</p>

<h3 id="Operands">操作数</h3>

<p>操作数是表达式中用到的值。操作数可以是一个字面量，或是一个(可能<a href="#Qualified_identifiers">限定</a>的)标识符。标识符可以是<a href="#Constant_declarations">常量</a>、<a href="#Variable_declarations">变量</a>、<a href="#Function_declarations">函数</a>、<a href="#Method_expressions">方法表达式</a>，或是带括号的表达式。
</p>

<pre class="ebnf">
<a id="Operand">Operand</a>    = <a href="#Literal" class="noline">Literal</a> | <a href="#OperandName" class="noline">OperandName</a> | <a href="#MethodExpr" class="noline">MethodExpr</a> | "(" <a href="#Expression" class="noline">Expression</a> ")" .
<a id="Literal">Literal</a>    = <a href="#BasicLit" class="noline">BasicLit</a> | <a href="#CompositeLit" class="noline">CompositeLit</a> | <a href="#FunctionLit" class="noline">FunctionLit</a> .
<a id="BasicLit">BasicLit</a>   = <a href="#int_lit" class="noline">int_lit</a> | <a href="#float_lit" class="noline">float_lit</a> | <a href="#imaginary_lit" class="noline">imaginary_lit</a> | <a href="#char_lit" class="noline">char_lit</a> | <a href="#string_lit" class="noline">string_lit</a> .
<a id="OperandName">OperandName</a> = <a href="#identifier" class="noline">identifier</a> | <a href="#QualifiedIdent" class="noline">QualifiedIdent</a>.
</pre>

<h3 id="Qualified_identifiers">限定标识符</h3>

<p>一个限定的标识符指的是一个带有包名前缀限制的标识符。包名和标识符都不能为<a href="#Blank_identifier">空</a>。</p>

<pre class="ebnf">
<a id="QualifiedIdent">QualifiedIdent</a> = <a href="#PackageName" class="noline">PackageName</a> "." <a href="#identifier" class="noline">identifier</a> .
</pre>

<p>一个限定的标识符访问的不是本包的一个标识符，而这个包必须提前<a href="#Import_declarations">导入</a>。<a href="#Exported_identifiers">导出</a>的必须是标识符，并且声明在包的<a href="#Blocks">包块</a>作用域。</p>

<pre>
math.Sin  // math 包的 Sin 函数
</pre>

<h3 id="Composite_literals">复合字面量</h3>

<p>复合字面量用来构造结构体、数组、分片和map类型的值，每一次都是创建一个新的。复合字面量包含值的类型，然后是一系列由{}括起来的复合元素。每一个元素都是单个表达式或是键值对。</p>

<pre class="ebnf">
<a id="CompositeLit">CompositeLit</a>  = <a href="#LiteralType" class="noline">LiteralType</a> <a href="#LiteralValue" class="noline">LiteralValue</a> .
<a id="LiteralType">LiteralType</a>   = <a href="#StructType" class="noline">StructType</a> | <a href="#ArrayType" class="noline">ArrayType</a> | "[" "..." "]" <a href="#ElementType" class="noline">ElementType</a> |
                <a href="#SliceType" class="noline">SliceType</a> | <a href="#MapType" class="noline">MapType</a> | <a href="#TypeName" class="noline">TypeName</a> .
<a id="LiteralValue">LiteralValue</a>  = "{" [ <a href="#ElementList" class="noline">ElementList</a> [ "，" ] ] "}" .
<a id="ElementList">ElementList</a>   = <a href="#Element" class="noline">Element</a> { "，" <a href="#Element" class="noline">Element</a> } .
<a id="Element">Element</a>       = [ <a href="#Key" class="noline">Key</a> ":" ] <a href="#Value" class="noline">Value</a> .
<a id="Key">Key</a>           = <a href="#FieldName" class="noline">FieldName</a> | <a href="#ElementIndex" class="noline">ElementIndex</a> .
<a id="FieldName">FieldName</a>     = <a href="#identifier" class="noline">identifier</a> .
<a id="ElementIndex">ElementIndex</a>  = <a href="#Expression" class="noline">Expression</a> .
<a id="Value">Value</a>         = <a href="#Expression" class="noline">Expression</a> | <a href="#LiteralValue" class="noline">LiteralValue</a> .
</pre>

<p>LiteralType必须是结构体、数组、分片或是map类型(语法会强制校验，除非给的是 TypeName 类型)。表达式的类型必须<a href="#Assignability">可赋值</a>给LiteralType相应的字段、元素、或是键类型，不能有任何转换。这里的键应该这样理解：对于结构体就是字段名，对于数组和分片就是下标，对于map就是对应的key。如果是map字面量的话，所有元素都必须有key。元素有重复的字段名或是常量key值是错误的。</p>

<p>结构体字面量有一下规则：</p>
<ul>
  <li>key必须是LiteralType中的一个字段名；</li>
  <li>字面量如果不包含任何key,那么它必须按声明的字段顺序给出所有字段的值;</li>
  <li>如果一个元素指定了key,那么所有元素都必须指定key;</li>
  <li>字面量不需要给每个结构体字段指定值，省略的字段取0值；</li>
  <li>字面量可能省略元素列表，这种情况下类型都取0值；</li>
  <li>指定对导入包中的一个结构体的费导出字段，是错误的。</li>
</ul>

<p>如果有以下声明</p>
<pre>
type Point3D struct { x， y， z float64 }
type Line struct { p， q Point3D }
</pre>

<p>那么可以这样</p>

<pre>
origin := Point3D{}                            // 0值
line := Line{origin， Point3D{y: -4， z: 12.3}}  // line.q.x 是 0 值
</pre>

<p>数组和分片字面量遵从一下规则:</p>
<ul>
  <li>每一个元素都关联一个表明数组位置的下标;</li>
  <li>每一个带key的元素,key作为下标,且必须为整型表达式;</li>
  <li>如果一个元素没有key,那么就用前一个的key+1;如果第一个元素没有key,那就是0.</li>
</ul>

<p>取地址的复合字面量(§<a href="#Address_operators">取地址运算符</a>)生成字面量值唯一实例的指针.</p>
<pre>
var pointer *Point3D = &amp;Point3D{y: 1000}
</pre>

<p>数组字面量的长度由 LiteralType 中的 length 指定.如果提供的元素少于长度,缺少的元素初始化为0值.如果提供的元素下标如果超过了数组的范围,这是错误的.记号<code>...</code>指定数组的长度,也就是最长下标+1.</p>

<pre>
buffer := [10]string{}             // len(buffer) == 10
intSet := [6]int{1， 2， 3， 5}       // len(intSet) == 6
days := [...]string{"Sat"， "Sun"}  // len(days) == 2
</pre>

<p>分片字面量描述的是整个底层数组的字面量,那么分片字面量的长度和容量是最大元素下标+1.一个分片字面量是如下形式:</p>

<pre>
[]T{x1， x2， … xn}
</pre>

<p>其实这是下面的一种简化版:</p>

<pre>
tmp := [n]T{x1， x2， … xn}
tmp[0 : n]
</pre>

<p>在数组/分片/map类型<code>T</code>复合字面量内,如果元素本身也是复合字面量,那么它可以省略类型<code>T</code>.相似的,是复合字面量地址<code>&amp;T</code>的元素可以省略类型<code>*T</code>.</p>



<pre>
[...]Point{{1.5， -3.5}， {0， 0}}   // 等同于 [...]Point{Point{1.5， -3.5}， Point{0， 0}}
[][]int{{1， 2， 3}， {4， 5}}        // 等同于 [][]int{[]int{1， 2， 3}， []int{4， 5}}

[...]*Point{{1.5， -3.5}， {0， 0}}  // 等同于 [...]*Point{&amp;Point{1.5， -3.5}， &amp;Point{0， 0}}
</pre>

<p>如果在<a href="#Keywords">关键字</a>和 if/for/switch 语句的左侧括号 { 之间有使用了 TypeName 形式的复合字面量,那么可能有一个解析歧义发生,因为字面量中的表达式的括号{和块作用域的混淆了.为了避免这种情况,可以在字面量两边加上括号().</p>

<pre>
if x == (T{a，b，c}[i]) { … }
if (x == T{a，b，c}[i]) { … }
</pre>

<p>合法的数组、分片、map字面量的例子：</p>

<pre>
// 素数列表
primes := []int{2， 3， 5， 7， 9， 2147483647}

// 当 ch 是元音的时候 vowels[ch] 为 true
vowels := [128]bool{'a': true， 'e': true， 'i': true， 'o': true， 'u': true， 'y': true}

// 数组 [10]float32{-1， 0， 0， 0， -0.1， -0.1， 0， 0， 0， -1}
filter := [10]float32{-1， 4: -0.1， -0.1， 9: -1}

// frequencies in Hz for equal-tempered scale (A4 = 440Hz)
noteFrequency := map[string]float32{
  "C0": 16.35， "D0": 18.35， "E0": 20.60， "F0": 21.83，
  "G0": 24.50， "A0": 27.50， "B0": 30.87，
}
</pre>


<h3 id="Function_literals">函数字面值</h3>

<p>
一个函数字面值代表一个匿名函数。它包括一个函数类型的说明以及一个函数体。
</p>

<pre class="ebnf">
<a id="FunctionLit">FunctionLit</a> = <a href="#FunctionType" class="noline">FunctionType</a> <a href="#Body" class="noline">Body</a> .
</pre>

<pre>
func(a， b int， z float64) bool { return a*b &lt; int(z) }
</pre>

<p>
一个函数字面值可以赋值给一个变量，也可以指直接调用。
</p>

<pre>
f := func(x， y int) int { return x + y }
func(ch chan int) { ch &lt;- ACK }(replyChan)
</pre>

<p>
函数字面量可以是闭包<em>closures</em>: 它访问它周围函数中的变量。这些变量既可以在周围的函数中使用，也可以在这个函数字面量中使用，只要它们在使用着，它们就存在着，也就是说，它们的
生存期可以延长。
</p>


<h3 id="Primary_expressions">主表达式</h3>

<p>
主表达式指的是那些一元、二元运算符表达式：
</p>

<pre class="ebnf">
<a id="PrimaryExpr">PrimaryExpr</a> =
  <a href="#Operand" class="noline">Operand</a> |
  <a href="#Conversion" class="noline">Conversion</a> |
  <a href="#BuiltinCall" class="noline">BuiltinCall</a> |
  <a href="#PrimaryExpr" class="noline">PrimaryExpr</a> <a href="#Selector" class="noline">Selector</a> |
  <a href="#PrimaryExpr" class="noline">PrimaryExpr</a> <a href="#Index" class="noline">Index</a> |
  <a href="#PrimaryExpr" class="noline">PrimaryExpr</a> <a href="#Slice" class="noline">Slice</a> |
  <a href="#PrimaryExpr" class="noline">PrimaryExpr</a> <a href="#TypeAssertion" class="noline">TypeAssertion</a> |
  <a href="#PrimaryExpr" class="noline">PrimaryExpr</a> <a href="#Call" class="noline">Call</a> .

<a id="Selector">Selector</a>       = "." <a href="#identifier" class="noline">identifier</a> .
<a id="Index">Index</a>          = "[" <a href="#Expression" class="noline">Expression</a> "]" .
<a id="Slice">Slice</a>          = "[" [ <a href="#Expression" class="noline">Expression</a> ] ":" [ <a href="#Expression" class="noline">Expression</a> ] "]" .
<a id="TypeAssertion">TypeAssertion</a>  = "." "(" <a href="#Type" class="noline">Type</a> ")" .
<a id="Call">Call</a>           = "(" [ <a href="#ArgumentList" class="noline">ArgumentList</a> [ "，" ] ] ")" .
<a id="ArgumentList">ArgumentList</a>   = <a href="#ExpressionList" class="noline">ExpressionList</a> [ "..." ] .
</pre>


<pre>
x
2
(s + ".txt")
f(3.1415， true)
Point{1， 2}
m["foo"]
s[i : j + 1]
obj.color
f.p[i].x()
</pre>


<h3 id="Selectors">选择子</h3>

<p>
对于<a href="#Primary_expressions">主表达式</a><code>x</code>（不是<a href="#Package_clause">包名</a>）来说，<em>选择子表达式</em>
</p>

<pre>
x.f
</pre>

<p>
代表的是<code>x</code>（有时候可能会是<code>*x</code>；见下面）的字段或是方法<code>f</code>。标识符<code>f</code>，不管是字段或是方法，我们都叫它<em>选择子</em>;它必须
不能是<a href="#Blank_identifier">空标识符</a>。选择子表达式的类型就是<code>f</code>的类型。如果<code>x</code>是个包名的话，你还是看<a href="#Qualified_identifiers">限定标识符</a>这里吧。
</p>

<p>
选择子<code>f</code>可能指代的就是类型<code>T</code>的字段或是方法<code>f</code>，它也可能指代的是<code>T</code>的一个<a href="#Struct_types">匿名字段</a>的字段或是方法<code>f</code>。
访问到<code>f</code>所要经过的匿名字段的数量叫做在<code>T</code>中的<em>深度</em>。如果字段<code>f</code>在<code>T</code>中声明，那么它的深度就是0。在<code>T</code>中的字段或是方法
<code>f</code>的深度是<code>f</code>在匿名字段<code>A</code>（在<code>T</code>声明）中的深度再加 1。
</p>

<p>
对选择子有下面一些规则：
</p>

<ol>
<li>
对已一个<code>T</code>类型或是一个指针<code>*T</code>（<code>T</code>不是接口类型）的值<code>x</code>，<code>x.f</code>代表的是在<code>T</code>中的最浅层次的字段或是方法，
它们之中有一个<code>f</code>。如果在最浅层次上没有精确的<a href="#Uniqueness_of_identifiers">一个<code>f</code></a>，那么选择子表达式就是不合法的。
</li>
<li>
对于一个<code>I</code>类型（<code>I</code>是一个接口）的值<code>x</code> 那么 <code>x.f</code>指代的是赋值给<code>x</code>的实际的<code>f</code>名字的方法。如果在<code>I</code>的
方法集中没有一个名字为<a href="#Method_sets">method set</a>的方法，那么这个选择子表达式就是不合法的。
</li>
<li>
其他情况下，<code>x.f</code>都是不合法的。
</li>
<li>
如果<code>x</code>是个指针或是接口类型，但是值却是<code>nil</code>，不管是赋值、计算值或是调用<code>x.f</code>都引起一个<a href="#Run_time_panics">运行时问题</a>。
</li>
</ol>

<p>
选择子会自动<a href="#Address_operators">解析</a>指向结构体的指针。如果<code>x</code>是个一个结构体指针，那么<code>x.y</code>就代表<code>(*x).y</code>;如果<code>y</code>还是一个
结构体指针，那么<code>x.y.z</code>代表<code>(*(*x).y).z</code>，以此类推。如果<code>x</code>包括一个匿名字段类型<code>*A</code>，而<code>A</code>又是一个结构体类型，那么
<code>x.f</code>代表的是<code>(*x.A).f</code>。
</p>

<p>
举个例子，给个声明：
</p>
<pre>
type T0 struct {
x int
}

func (*T0) M0()

type T1 struct {
y int
}

func (T1) M1()

type T2 struct {
z int
T1
*T0
}

func (*T2) M2()

type Q *T2

var t T2     // with t.T0 != nil
var p *T2    // with p != nil and (*p).T0 != nil
var q Q = p
</pre>

<p>
下面的都是合法的：
</p>
<pre>
t.z          // t.z
t.y          // t.T1.y
t.x          // (*t.TO).x

p.z          // (*p).z
p.y          // (*p).T1.y
p.x          // (*(*p).T0).x

q.x          // (*(*q).T0).x        (*q).x is a valid field selector

p.M2()       // p.M2()              M2 expects *T2 receiver
p.M1()       // ((*p).T1).M1()      M1 expects T1 receiver
p.M0()       // ((&amp;(*p).T0)).M0()   M0 expects *T0 receiver, see section on Calls

</pre>

<p>但下面的是不合法的：</p>

<pre>
q.M0()       // (*q).M0 is valid but not a field selector
</pre>


<!--
<span class="alert">
TODO: Specify what happens to receivers.
</span>
-->


<h3 id="Indexes">索引/下标</h3>

<p>
一个有下面形式的主表达式：
</p>

<pre>
a[x]
</pre>

<p>
用来访问数组、分片、字符串或是映射 map <code>a</code>中的以<code>x</code>为下标/索引的元素。值<code>x</code>被叫做下标/索引<em>index</em>或是<em>map 键</em>。对于它们有下面的规则：
</p>

<p>
假设 <code>A</code>是一个<a href="#Array_types">数组类型</a>，那么对于<code>A</code>或是<code>*A</code>的<code>a</code>，或是对于是<a href="#Slice_types">分片类型</a><code>S</code>的变量<code>a</code>，那么
</p>
<ul>
  <li><code>x</code>的值必须是整型，且<code>0 &lt;= x &lt; len(a)</code></li>
  <li><code>a[x]</code>是下标位于<code>x</code>的元素的值，
    <code>a[x]</code>的类型是<code>A</code>的元素类型</li>
  <li>如果<code>a</code>是<code>nil</code>或是下标<code>x</code>越界，那么会有一个<a href="#Run_time_panics">运行时问题</a> 出现</li>
</ul>

<p>如果<code>T</code>是一个<a href="#String_types">string类型</a>，那么对于<code>T</code>类型的<code>a</code>来说：</p>
<ul>
  <li><code>x</code>的值必须是整型，且<code>0 &lt;= x &lt; len(a)</code></li>
  <li><code>a[x]</code>是下表是<code>x</code>的字节，<code>a[x]</code>类型是<code>byte</code></li>
  <li><code>a[x]</code>是不能赋值的</li>
  <li>如果下标<code>x</code>越界，那么会有一个<a href="#Run_time_panics">运行时问题</a> 出现</li>
</ul>

<p>如果<code>M</code>是<a href="#Map_types">map 类型</a>，那么对于<code>M</code>类型的<code>a</code>来说：</p>
<ul>
  <li><code>x</code>对于<code>M</code>的key类型来说必须是<a href="#Assignability">可赋值的</a></li>
  <li>如果map结构包含key<code>x</code>，那么<code>a[x]</code>是key <code>x</code>对应的value值，<code>a[x]</code>类型是<code>M</code>的value类型</li>
  <li>如果<code>nil</code> 或是不包含对应的key，那么<code>a[x]</code> 是<code>M</code>对应value类型的<a href="#The_zero_value">0 值</a></li>
</ul>

<p>除了上面的情况之外，<code>a[x]</code>都是不合法的。</p>

<p>
对于类型<code>map[K]V</code>的map<code>a</code>来说，下标表达式可以以一种特殊的形式用在赋值或是初始化中：</p>

<pre>
v， ok = a[x]
v， ok := a[x]
var v， ok = a[x]
</pre>

<p>
在这种形式中，下表表达式的结果是一个类型为<code>(V， bool)</code>pair对的值。 如果key<code>x</code>是存在的，那么<code>ok</code>的值是<code>true</code>，否则是<code>false</code> ；<code>v</code>的值就是<code>a[x]</code>作为单个结果的值。</p>

<p>对于一个<code>nil</code> map的元素的赋值，会引起<a href="#Run_time_panics">运行时错误</a>。</p>


<h3 id="Slices">分片</h3>

<p>对于一个字符串、数组、数组指针或是一个分片<code>a</code>，主表达式</p>

<pre>
a[low : high]
</pre>

<p>实际上构造了一个子字符串或是分片。下标表达式<code>low</code>和<code>high</code>决定了哪些元素出现在结果中。结果是下标从<code>low</code>开始长度为<code>high</code>
&nbsp;-&nbsp;<code>low</code>。在堆数组<code>a</code>进行分片之后
</p>

<pre>
a := [5]int{1， 2， 3， 4， 5}
s := a[1:4]
</pre>

<p>分片<code>s</code>类型<code>[]int</code>，长度为3，容量为4， 对应的元素是：</p>

<pre>
s[0] == 2
s[1] == 3
s[2] == 4
</pre>

<p>为了方便起见，下标表达式的前后两部分都可以省略，缺省的<code>low</code>默认是0，缺省的<code>high</code>默认是分片的长度：</p>

<pre>
a[2:]  // same a[2 : len(a)]
a[:3]  // same as a[0 : 3]
a[:]   // same as a[0 : len(a)]
</pre>

<p>对于数组或是字符串来说，下标<code>low</code> 和 <code>high</code> 必须满足 0 &lt;= <code>low</code> &lt;= <code>high</code> &lt;= 长度; 对于分片来说，访问上界不是长度而是容量大小。</p>

<p>如果分片的对象是字符串或是分片类型，那么分片的结果还是对应的字符串或是分片类型；如果分片的对象是数组，那么它必须是 <a href="#Address_operators">可寻址的</a>，分片的结果是一个分片类型，元素的类型和数组的元素类型一致。</p>


<h3 id="Type_assertions">类型断言</h3>

<p>对于<a href="#Interface_types">接口类型</a>或是其他类型<code>T</code>来说，<code>x</code>的如下主表达式</p>

<pre>
x.(T)
</pre>

<p>断言<code>x</code>不是<code>nil</code>，并把<code>T</code>类型的值保存到<code>x</code>中。这种<code>x.(T)</code>形式叫做<em>类型断言</em>。</p>
<p>更精确地说，如果<code>T</code>不是一个接口类型，那么<code>x.(T)</code>断言<code>x</code><a href="#Type_identity">等同于</a>类型<code>T</code>；如果<code>T</code>是一个接口类型，<code>x.(T)</code>断言<code>x</code>实现了接口<code>T</code> (§<a href="#Interface_types">接口类型</a>)。</p>

<p>如果断言成立，那么表达式的值和<code>x</code>中的值一样，类型是<code>T</code>；如果断言失败，会引起一个<a href="#Run_time_panics">运行时异常</a>。换句话说，即便<code>x</code>是一个动态类型，但是一个运行正常的程序会保证<code>x.(T)</code>就是类型<code>T</code> 。</p>
<p>如果断言是用在赋值或是初始化中：</p>

<pre>
v， ok = x.(T)
v， ok := x.(T)
var v， ok = x.(T)
</pre>

<p>断言的结果是一个<code>(T， bool)</code>对。如果断言成立，那么结果是<code>(x.(T)， true)</code>对；否则，结果是<code>(Z， false)</code>，其中<code>Z</code>是一个<code>T</code>类型的<a href="#The_zero_value">0值</a>，这种情况下不会引起一个运行时异常。这种构造的类型断言更像是返回一个值和一个成功标记的函数调用(§<a href="#Assignments">赋值</a>)。</p>

<h3 id="Calls">函数调用</h3>

<p>假定<code>f</code>是函数类型<code>F</code>，那么下面的表达式</p>

<pre>
f(a1， a2， … an)
</pre>

<p>调用<code>f</code>，参数是<code>a1，a2，… an</code>。除了一个特殊的情况之外，所有的参数都必须是单值表达式，而且可以<a href="#Assignability">赋值</a>给<code>F</code>的对应参数。参数是在函数调用之前求值。表达式的类型就是<code>F</code>的返回值类型。方法的调用和函数调用类似，只不过方法要指定一个方法的接收器类型的选择子。
</p>

<pre>
math.Atan2(x， y)  // 函数调用
var pt *Point
pt.Scale(3.5)  // 方法调用，pt 是接收器
</pre>

<p>函数调用中，函数值和参数以<a href="#Order_of_evaluation">正常顺序</a>求值。在它们求值之后，调用参数会传递给函数，然后调用开始执行。当函数返回的时候，返回值参数会传递给调用方。</p>

<p>对<code>nil</code>函数进行调用会引起一个<a href="#Run_time_panics">运行时异常</a>。</p>

<p>介绍一种特殊的情况，如果函数或是方法<code>g</code>的返回值参数正好匹配函数或是方法<code>f</code>的参数，那么<code>f(g(<em>parameters_of_g</em>))</code>就是将<code>g</code>调用的返回结果依次传给<code>f</code>进行调用。<code>f</code>的调用参数必须全部都是<code>g</code>的结果，并且<code>g</code>需要有至少一个返回结果。如果<code>f</code>的最后一个参数带<code>...</code>，那么<code>g</code>的返回值在正常的参数赋值之后<code>g</code>依然保留。</p>

<pre>
func Split(s string， pos int) (string， string) {
  return s[0:pos]， s[pos:]
}

func Join(s， t string) string {
  return s + t
}

if Join(Split(value， len(value)/2)) != value {
  log.Panic("test fails")
}
</pre>

<p>方法调用<code>x.m()</code>如果合法，需要<code>x</code>的<a href="#Method_sets">方法集</a>包含<code>m</code>，并且参数列表可以赋值给<code>m</code>。如果<code>x</code>是<a href="#Address_operators">可寻址的</a>，并且<code>&amp;x</code>的方法集包含<code>m</code>，那么<code>x.m()</code>是<code>(&amp;x).m()</code>的简化版：</p>

<pre>
var p Point
p.Scale(3.5)
</pre>

<p>没有特殊的方法类型，也没有方法字面量.</p>

<h3 id="Passing_arguments_to_..._parameters">参数传递给<code>...</code></h3>

<p>如果<code>f</code>的最后一个参数是<code>...T</code>的可变参数,那么那个参数等价于一个<code>[]T</code>类型的参数.对于<code>f</code>的每一次调用,最后一个参数是一个<code>[]T</code>的分片,所有的参数对于<code>T</code>类型必须是<a href="#Assignability">可赋值的</a>,分片的长度是调用时传递参数的个数,每一次调用可能不同.</p>

<p>假定给如下函数和调用</p>
<pre>
func Greeting(prefix string， who ...string)
Greeting("hello:"， "Joe"， "Anna"， "Eileen")
</pre>

<p><code>Greeting</code>的参数<code>who</code>的值是<code>[]string{"Joe"， "Anna"， "Eileen"}</code>。</p>

<p>如果最后一个参数可以赋值给一个分片类型<code>[]T</code>，那么它可以不加修改地传递给<code>...T</code>参数，也不会创建新的分片。</p>

<p>给分片<code>s</code>和调用</p>

<pre>
s := []string{"James"， "Jasmine"}
Greeting("goodbye:"， s...)
</pre>

<p><code>Greeting</code>的参数<code>who</code>的值和<code>s</code>一样，使用相同的底层数组。</p>

<h3 id="Operators">运算符</h3>

<p>运算符结合了运算数和表达式。</p>

<pre class="ebnf">
<a id="Expression">Expression</a> = <a href="#UnaryExpr" class="noline">UnaryExpr</a> | <a href="#Expression" class="noline">Expression</a> <a href="#binary_op" class="noline">binary_op</a> <a href="#UnaryExpr" class="noline">UnaryExpr</a> .
<a id="UnaryExpr">UnaryExpr</a>  = <a href="#PrimaryExpr" class="noline">PrimaryExpr</a> | <a href="#unary_op" class="noline">unary_op</a> <a href="#UnaryExpr" class="noline">UnaryExpr</a> .

<a id="binary_op">binary_op</a>  = "||" | "&amp;&amp;" | <a href="#rel_op" class="noline">rel_op</a> | <a href="#add_op" class="noline">add_op</a> | <a href="#mul_op" class="noline">mul_op</a> .
<a id="rel_op">rel_op</a>     = "==" | "!=" | "&lt;" | "&lt;=" | ">" | ">=" .
<a id="add_op">add_op</a>     = "+" | "-" | "|" | "^" .
<a id="mul_op">mul_op</a>     = "*" | "/" | "%" | "&lt;&lt;" | "&gt;&gt;" | "&amp;" | "&amp;^" .

<a id="unary_op">unary_op</a>   = "+" | "-" | "!" | "^" | "*" | "&amp;" | "&lt;-" .
</pre>

<p>我们会在<a href="#Comparison_operators">其他地方</a>讨论比较。除了移位运算或是无类型<a href="#Constants">常量</a>外，其他二元运算符的操作数类型必须是<a href="#Type_identity">一致的</a>如果操作数都是常量，可以看<a href="#Constant_expressions">常量表达式</a>小节。</p>

<p>除了移位操作之外，如果两个运算符中的一个是无类型的<a href="#Constants">常量</a>而另外一个不是，那么常量会<a href="#Conversions">转换</a>为另外的一个类型。</p>

<p>移位表达式的右侧运算符必须是无符号整型,或是可以转换成整型的无类型常量.如果一个非常量移位表达式的左侧是一个无类型常量,那么常量的类型和如果移位表达式被替换成其左侧表达式后的类型.如果根据上下文不能判断类型,那么类型就是<code>int</code>,譬如移位表达式和无符号常量比较.</p>
<pre>
var s uint = 33
var i = 1&lt;&lt;s           // 1 has type int
var j int32 = 1&lt;&lt;s     // 1 has type int32; j == 0
var k = uint64(1&lt;&lt;s)   // 1 has type uint64; k == 1&lt;&lt;33
var m int = 1.0&lt;&lt;s     // 1.0 has type int
var n = 1.0&lt;&lt;s != 0    // 1.0 has type int; n == false if ints are 32bits in size
var o = 1&lt;&lt;s == 2&lt;&lt;s   // 1 and 2 have type int; o == true if ints are 32bits in size
var p = 1&lt;&lt;s == 1&lt;&lt;33  // illegal if ints are 32bits in size: 1 has type int， but 1&lt;&lt;33 overflows int
var u = 1.0&lt;&lt;s         // illegal: 1.0 has type float64， cannot shift
var v float32 = 1&lt;&lt;s   // illegal: 1 has type float32， cannot shift
var w int64 = 1.0&lt;&lt;33  // 1.0&lt;&lt;33 is a constant shift expression
</pre>

<h3 id="Operator_precedence">运算符优先级</h3>
<p>一元运算符总是有最高的优先级。然而<code>++</code>和<code>--</code>运算符形成的语句，它们不是表达式，语句<code>*p++</code>等同于<code>(*p)++</code>。二元运算符的优先级有5级。乘法一级是最强的，后面是加法一级，其次比较一级，再其次逻辑<code>&amp;&amp;</code>一级，最后是逻辑<code>||</code>一级。</p>

<pre class="grammar">
  优先级           运算符
    5             *  /  %  &lt;&lt;  &gt;&gt;  &amp;  &amp;^
    4             +  -  |  ^
    3             ==  !=  &lt;  &lt;=  &gt;  &gt;=
    2             &amp;&amp;
    1             ||
</pre>

<p>优先级相同的二元运算符自左向右结合。举个例子<code>x / y * z</code>和<code>(x / y) * z</code>相同。</p>

<pre>
+x
23 + 3*x[i]
x &lt;= f()
^a &gt;&gt; b
f() || g()
x == y+1 &amp;&amp; &lt;-chanPtr &gt; 0
</pre>


<h3 id="Arithmetic_operators">算术操作</h3>
<p>算出运算符作用于数值类型，得到一个和第一个操作数类型相同的结果。四个标准的算术运算操作(<code>+</code>，<code>-</code>，<code>*</code>，<code>/</code>)可以用于整数、浮点数和复数类型；<code>+</code>还可以用于字符串类型。其他算术运算只能用于整数。</p>

<pre class="grammar">
+    求和                    integers， floats， complex values， strings
-    求差                    integers， floats， complex values
*    求积                    integers， floats， complex values
/    求商                    integers， floats， complex values
%    求模                    integers

&amp;    按位与            integers
|    按位或            integers
^    按位异或          integers
&amp;^   按位清除          integers

&lt;&lt;   左移            integer &lt;&lt; unsigned integer
&gt;&gt;   右移            integer &gt;&gt; unsigned integer
</pre>

<p>字符串可以使用<code>+</code>进行连接操作，或是<code>+=</code>进行赋值操作。</p>

<pre>
s := "hi" + string(c)
s += " and good bye"
</pre>

<p>字符串连接操作会创建新的字符串。</p>
<p>对于两个整型<code>x</code>和<code>y</code>，商<code>q = x / y</code>和模<code>r = x % y</code>应该满足以下关系：</p>

<pre>
x = q*y + r  and  |r| &lt; |y|
</pre>

<p>其中，<code>x / y</code>向0截取(<a href="http://en.wikipedia.org/wiki/Modulo_operation">"truncated division"</a>)。</p>

<pre>
 x     y     x / y     x % y
 5     3       1         2
-5     3      -1        -2
 5    -3      -1         2
-5    -3       1        -2
</pre>

<p>规则有一个例外，如果<code>x</code>是最小的负数值，那么商<code>q = x / -1</code>等于<code>x</code> (<code>r = 0</code>)。</p>

<pre>
       x， q
int8                     -128
int16                  -32768
int32             -2147483648
int64    -9223372036854775808
</pre>

<p>如果除数是0，那么引起一个<a href="#Run_time_panics">运行时异常</a>。如果被除数是正数，而除数是2的指数，那么除法可能会用右移运算符替代，余数会用按位与操作来计算。</p>

<pre>
 x     x / 4     x % 4     x &gt;&gt; 2     x &amp; 3
 11      2         3         2          3
-11     -2        -3        -3          1
</pre>

<p>移位运算符按照第二个参数的位数按位移动第一个操作数。如果左侧操作数是有符号的，那么就是算术移位；如果是无符号的，那么就是逻辑移位。移动的位数没有限制。移位操作就像是第一个操作数移动了<code>n</code>次，一次一位。<code>x &lt;&lt; 1</code>和<code>x*2</code>相同，<code>x &gt;&gt; 1</code>和<code>x/2</code>相同，只不过是向负无穷截取。</p>

<p>对于整型操作数，一元运算符<code>+</code>、<code>-</code>和<code>^</code>定义如下：</p>

<pre class="grammar">
+x                          : 0 + x
-x    取负              : 0 - x
^x    取反    : m ^ x  with m = "all bits set to 1" for unsigned x
                                      and  m = -1 for signed x
</pre>

<p>对于浮点数和复数，<code>+x</code>就是<code>x</code>，<code>-x</code>就是<code>x</code>的负值。根据 IEEE-754 标准，一个浮点数或是复数除以0结果是未指定的；不过实现可以让其引起一个<a href="#Run_time_panics">运行时异常</a>。</p>

<h3 id="Integer_overflow">整数溢出</h3>

<p>对于无符号整数值来说，<code>+</code>，<code>-</code>，<code>*</code>，和<code>&lt;&lt;</code>都是模2<sup><em>n</em></sup>计算。<em>n</em> 就是无符号整数类型(§<a href="#Numeric_types">整数类型</a>)的位宽。简单滴说，这些整数操作会将溢出的高位忽略掉，但是程序可能会依赖于“环绕”现象。</p>

<p>对于有符号整数，<code>+</code>、<code>-</code>、<code>*</code>和<code>&lt;&lt;</code>可能会溢出，这是合法的，结果值也是存在的，不过依赖于有符号数的表示、执行的操作以及操作数本身。溢出不会引起异常。编译器不能在假定溢出不会发生的情况下优化代码。譬如说，不能假定<code>x &lt; x + 1</code>总是成立。</p>


<h3 id="Comparison_operators">比较运算符</h3>

<p>比较运算符比较两个操作数，然后得出一个bool值。</p>

<pre class="grammar">
==    相等
!=    不相等
&lt;     小于
&lt;=    小于等于
&gt;     大于
&gt;=    大于等于
</pre>

<p>在比较中，第一个操作数对于第二个操作数的类型来说必须是<a href="#Assignability">可赋值</a>的，相反依然成立。
</p>
<p>等值比较元素符<code>==</code>和<code>!=</code>比较的对象必须是<em>可比较的</em>.顺序运算符<code>&lt;</code>， <code>&lt;=</code>， <code>&gt;</code>， and <code>&gt;=</code>比较的对象必须是<em>可排序的</em>.比较结果如下定义:</p>

<ul>
  <li>布尔值是可以比较的.两个布尔值相等,当且仅当他们都是<code>true</code>或都是<code>false</code>;</li>
  <li>整型数值是可以比较的,也是可以排序的,就是按照通常认为的方式;</li>
  <li>浮点数是可以比较的,也是可以排序的,按照 IEEE-754 标准;</li>
  <li>复数是可以比较的.两个复数<code>u</code>和<code>v</code>相等当且仅当<code>real(u) == real(v)</code>,<code>imag(u) == imag(v)</code>;</li>
  <li>字符串是可以比较的,也是可以排序的,按照词法字节顺序;</li>
  <li>指针是可以比较的.两个指针相等当且仅当它们指向同一个变量,或是都为<code>nil</code>;指向不同的<a href="#Size_and_alignment_guarantees">0尺寸</a>的变量可以也可以不是相等.</li>
  <li>管道值是可以比较的.两个管道相等当且仅当它们是同一个<code>make</code>(§<a href="#Making_slices_maps_and_channels">Making slices， maps， and channels</a>)的结果,或是都为<code>nil</code></li>
  <li>接口值也是可以比较的。两个接口相等当且仅当它们有<a href="#Type_identity">一致</a>的动态类型以及相同的动态类型值，或是它们都是<code>nil</code>；  </li>
  <li>非接口类型<code>X</code>的值<code>x</code>和接口类型<code>T</code>的值<code>t</code>总是可以比较的，当类型<code>X</code>实现了<code>T</code>的时候。它们相等当且仅当<code>t</code>的动态类型和<code>X</code>一致，并且<code>t</code>的动态值和<code>x</code>相等。  </li>
  <li>结构体值是可以比较的，如果它们所有的字段都是可以比较的话。两个结构体相等当且仅当它们对应的非<a href="#Blank_identifier">空</a>字段相等。  </li>
  <li>数组总是可以比较的，如果数组元素的值是可以比较的话。两个数组相等，当且仅当它们对应的元素相等。  </li>
</ul>

<p>比较两个一致动态类型的值的时候，如果值的类型本身不可比较，那么会引起一个<a href="#Run_time_panics">运行时异常</a>。这种行为不仅适用于直接的接口值比较，同样适用于比较接口值数组，或是带接口值字段的结构体。</p>

<p>分片、map和函数值是不可比较的。但是，作为一个特殊情况，一个分片、map或是函数值可以和<code>nil</code>进行比较。指针、管道、接口值和<code>nil</code>的比较也是允许的，也是服从上面说的规则。</p>

<p>比较操作的结果可以赋值给任何布尔类型。如果没有指定布尔类型，那么结果类型是<code>bool</code>。</p>

<pre>
type MyBool bool

var x， y int
var (
  b1 MyBool = x == y // 结果类型 MyBool
  b2 bool   = x == y // 结果类型 bool
  b3        = x == y // 结果类型 bool
)
</pre>

<h3 id="Logical_operators">逻辑运算符</h3>

<p>逻辑运算符应用于<a href="#Boolean_types">bool</a>值，得出一个和操作数类型相同的类型。右侧操作数不一定求值。</p>

<pre class="grammar">
&amp;&amp;    conditional and    p &amp;&amp; q  is  "if p then q else false"
||    conditional or     p || q  is  "if p then true else q"
!     not                !p      is  "not p"
</pre>


<h3 id="Address_operators">取地址运算符</h3>

<p>对于<code>T</code>类型的操作数<code>x</code>来说，取地址操作<code>&amp;x</code>会生成一个指向<code>x</code>的类型为<code>*T</code>的指针。操作数必须是可寻址的，也就是说，操作数必须是变量、指针间解析、分片索引操作，或是可寻址的结构体的字段选择子，或是可寻址数组的下标操作。也有一种情况是，<code>x</code>也可以是<a href="#Composite_literals">复合字面量</a>。</p>
<p>对于<code>*T</code>类型的操作数<code>x</code>来说，指针解析<code>*x</code>就是<code>x</code>指向的<code>T</code>类型的值。如果<code>x</code>是<code>nil</code>，那么试图<code>*x</code>将会引起一个<a href="#Run_time_panics">运行时异常</a>。</p>

<pre>
&amp;x
&amp;a[f(2)]
*p
*pf(x)
</pre>


<h3 id="Receive_operator">接收操作符</h3>

<p>对于<a href="#Channel_types">管道类型</a>的操作数<code>ch</code>来说，接收操作<code>&lt;-ch</code>是从管道<code>ch</code>中接收到的值，类型就是管道元素的类型。如果值没有获取到，表达式一直阻塞。从<code>nil</code>管道中接收会永远阻塞。从一个<a href="#Close">关闭</a>的管道中接收总是成功，返回的是元素类型的<a href="#The_zero_value">0值</a>。</p>

<pre>
v1 := &lt;-ch
v2 = &lt;-ch
f(&lt;-ch)
&lt;-strobe  // wait until clock pulse and discard received value
</pre>

<p>用在赋值或是初始化中的接收表达式的形式：</p>

<pre>
x， ok = &lt;-ch
x， ok := &lt;-ch
var x， ok = &lt;-ch
</pre>

<p>会求得一个额外的<code>bool</code>类型的结果，指示通信是否成功。如果接收成功则<code>ok</code>是<code>true</code>，否则是<code>false</code>，也就是当管道中没有值或是已经关闭的情况下，取得的值是0值。</p>

<!--
<p>
<span class="alert">TODO: Probably in a separate section， communication semantics
need to be presented regarding send， receive， select， and goroutines.</span>
</p>
-->


<h3 id="Method_expressions">方法表达式</h3>

<p>如果<code>M</code>在类型<code>T</code>的<a href="#Method_sets">方法集</a>中，那么<code>T.M</code>就像是一个普通的参数调用，参数是<code>M</code>，只不过前面追加了一个方法的接收器作为参数。</p>

<pre class="ebnf">
<a id="MethodExpr">MethodExpr</a>    = <a href="#ReceiverType" class="noline">ReceiverType</a> "." <a href="#MethodName" class="noline">MethodName</a> .
<a id="ReceiverType">ReceiverType</a>  = <a href="#TypeName" class="noline">TypeName</a> | "(" "*" <a href="#TypeName" class="noline">TypeName</a> ")" .
</pre>

<p>考虑一个结构体类型<code>T</code>有两个方法：<code>T</code>类型接收器的<code>Mv</code>，<code>*T</code>类型接收器的<code>Mp</code></p>

<pre>
type T struct {
  a int
}
func (tv  T) Mv(a int) int         { return 0 }  // 值接收器
func (tp *T) Mp(f float32) float32 { return 1 }  // 指针接收器
var t T
</pre>

<p>表达式</p>

<pre>
T.Mv
</pre>

<p>得出一个函数，等价于<code>Mv</code>只不过第一个参数是显式的接收器，它的签名是：</p>

<pre>
func(tv T， a int) int
</pre>

<p>这个函数可以正常调用，所以下面的三个调用是一样的：</p>

<pre>
t.Mv(7)
T.Mv(t， 7)
f := T.Mv; f(t， 7)
</pre>

<p>类似的，表达式：</p>

<pre>
(*T).Mp
</pre>

<p>会生成一个函数值，签名是：</p>

<pre>
func(tp *T， f float32) float32
</pre>

<p>对于一个值接收器的方法来说，可以衍生出一个显式带指针接收器的函数，所以：</p>

<pre>
(*T).Mv
</pre>

<p>会生成一个函数值，签名是：</p>

<pre>
func(tv *T， a int) int
</pre>

<p>这种创建一个值作为接收器传递给底层方法的情况，方法不会重写传给函数调用的地址值。</p>

<p>最后一个case，指针接收器的方法用一个值接收器去调用是不允许的，因为指针接收器的方法不在值接收器方法集内。</p>

<p>从方法中衍生出的函数值使用的是函数调用的预发，接收器作为第一个参数传递给函数。譬如，<code>f := T.Mv</code>， <code>f</code>可以如此调用<code>f(t， 7)</code>而不是<code>t.f(7)</code>。构造一个绑定到接收器的函数，可以使用<a href="#Function_literals">闭包</a>。</p>

<p>从一个借口类型的方法衍生出一个函数值是可以的，函数结果显式带接口类型的接收器的参数。</p>

<h3 id="Conversions">转换</h3>

<p>转换表达式的形式是：<code>T(x)</code>，其中<code>T</code>是要转换的类型，<code>x</code>是要转换的表达式。</p>

<pre class="ebnf">
<a id="Conversion">Conversion</a> = <a href="#Type" class="noline">Type</a> "(" <a href="#Expression" class="noline">Expression</a> ")" .
</pre>

<p>如果一个类型开始于一个运算符，那么它必须用括号()括起来：
</p>

<pre>
*Point(p)        // 如同 *(Point(p))
(*Point)(p)      // p 转换为 (*Point)
&lt;-chan int(c)    // 如同 &lt;-(chan int(c))
(&lt;-chan int)(c)  // c 转换为 (&lt;-chan int)
</pre>

<p><a href="#Constants">常量</a>值<code>x</code>转换为<code>T</code>类型，有以下几种情况：
</p>

<ul>
  <li>
  <code>x</code>可以用<code>T</code>类型表示；
  </li>
  <li>
  <code>x</code>是整型常量，而<code>T</code>是<a href="#String_types">字符串类型</a>。相同的规则可以看非常量<code>x</code>的情况。(§<a href="#Conversions_to_and_from_a_string_type">和字符串之间的转换</a>)
  </li>
</ul>

<p>转换一个常量生成一个有类型的常量作为结果：</p>

<pre>
uint(iota)               // iota 值类型：uint
float32(2.718281828)     // 2.718281828 类型： float32
complex128(1)            // 1.0 + 0.0i 类型： complex128
string('x')              // "x" 类型： string
string(0x266c)           // "♬" 类型： string
MyString("foo" + "bar")  // "foobar" 类型： MyString
string([]byte{'a'})      // 非常量: []byte{'a'} 不是一个常量
(*int)(nil)              // 非常量: nil 不是一个常量， *int 不是布尔、数值或是字符串类型
int(1.2)                 // 不合法: 1.2 不能表示成 int
string(65.0)             // 不合法: 65.0 不是整数常量
</pre>

<p>一个非常量值<code>x</code>可以转换为<code>T</code>，有下面一些情况：
</p>

<ul>
  <li><code>x</code>对于类型<code>T</code>是<a href="#Assignability">可赋值的</a>；</li>
  <li><code>x</code>的类型和<code>T</code>有一致的<a href="#Types">底层类型</a>；</li>
  <li>
  <code>x</code>的类型和<code>T</code>是无名的指针类型，它们的基类型有一致的底层类型；</li>
  <li>
  <code>x</code>的类型和<code>T</code>是相同的整数，或是浮点数类型；
  </li>
  <li>
  <code>x</code>的类型和<code>T</code>都是复数类型；
  </li>
  <li>
  <code>x</code>是整型，或是类型<code>[]byte</code>或是<code>[]rune</code>，而<code>T</code>是字符串类型；
  </li>
  <li><code>x</code>是字符串，而<code>T</code>是<code>[]byte</code>或是<code>[]rune</code>。</li>
</ul>

<p>数值类型之间，或是和字符串之间的(非常量)转换还有特殊的规则。这些转换可能会改变<code>x</code>的表示，以及引起一些运行时的开销。所有其他的转换只是改变类型，不会改变<code>x</code>的表示。</p>

<p>指针和整型之间不能转换。不过<a href="#Package_unsafe"><code>unsafe</code></a>包在一个限制条件下实现了这个功能。</p>

<h4>数值类型之间的转换</h4>

<p>非常量数值的转换，有一下规则：</p>

<ol>
<li>整型之间进行转换的时候，如果有一个值是无符号，那么它会符号扩展到隐式的无穷精度，其他情况进行0扩展。然后截取到结果类型的尺寸。譬如，如果<code>v := uint16(0x10F0)</code>，那么<code>uint32(int8(v)) == 0xFFFFFFF0</code>。转换总是会得到一个有效的值，但不会有任何溢出的迹象；</li>
<li>当浮点数转换为整数类型，是去掉小数部分(向0截取)；
</li>
<li>当把整型或是浮点数转换为浮点型，或是复数转换成另外一个附属，那么会向目标类型四舍五入。譬如，<code>float32</code>类型的变量<code>x</code>可能使用超过 IEEE-754 整型的精度进行存储，但是float32(x)是将<code>x</code>的值往32位精度进行四舍五入。类似的，<code>x + 0.1</code>可能会超过32位精度，而<code>float32(x + 0.1)</code>不会。</li>
</ol>

<p>所有涉及到浮点数或是复数的非常量转换，如果结果类型不能成功滴表示转换，那么结果值依赖于实现。</p>

<h4 id="Conversions_to_and_from_a_string_type">和字符串类型之间的转换</h4>

<ol>
<li>有符号或是无符号整数转换成字符串，得到的是整数表示的UTF-8字符串。超过 Unicode 代码点范围外的数值转换成<code>"\uFFFD"</code>。

<pre>
string('a')       // "a"
string(-1)        // "\ufffd" == "\xef\xbf\xbd"
string(0xf8)      // "\u00f8" == "ø" == "\xc3\xb8"
type MyString string
MyString(0x65e5)  // "\u65e5" == "日" == "\xe6\x97\xa5"
</pre>
</li>

<li>将字节分片转换成字符串，得到的是分片中连续元素的字符串。如果分片是<code>nil</code>，则结果是空串。

<pre>
string([]byte{'h'， 'e'， 'l'， 'l'， '\xc3'， '\xb8'})  // "hellø"

type MyBytes []byte
string(MyBytes{'h'， 'e'， 'l'， 'l'， '\xc3'， '\xb8'})  // "hellø"
</pre>
</li>

<li>将 rune 分片转换成字符串，得到的是每个 rune 转换成字符串的连接串。如果分片是<code>nil</code>，则结果是空串。

<pre>
string([]rune{0x767d， 0x9d6c， 0x7fd4})  // "\u767d\u9d6c\u7fd4" == "白鵬翔"

type MyRunes []rune
string(MyRunes{0x767d， 0x9d6c， 0x7fd4})  // "\u767d\u9d6c\u7fd4" == "白鵬翔"
</pre>
</li>

<li>将字符串转换成字节分片，得到的是字符串字节元素的分片。如果是空串，则结果是<code>[]byte(nil)</code>。

<pre>
[]byte("hellø")   // []byte{'h'， 'e'， 'l'， 'l'， '\xc3'， '\xb8'}
MyBytes("hellø")  // []byte{'h'， 'e'， 'l'， 'l'， '\xc3'， '\xb8'}
</pre>
</li>

<li>将字符串转换成 rune 分片，得到的是字符串每个代码点的分片。如果是空串，则结果是<code>[]rune(nil)</code>。
<pre>
[]rune(MyString("白鵬翔"))  // []rune{0x767d， 0x9d6c， 0x7fd4}
MyRunes("白鵬翔")           // []rune{0x767d， 0x9d6c， 0x7fd4}
</pre>
</li>
</ol>


<h3 id="Constant_expressions">常量表达式</h3>

<p>常量表达式只能包含<a href="#Constants">常量</a>操作数，它们是在编译期求值。</p>

<p>无类型的布尔、数值、字符串常量可以用在布尔、数值或是字符串类型可以出现的地方。除了移位运算符之外，如果二元运算符是不同类型的无类型常量，结果类型是下面类型列表出现的类型的靠后的一个：整型、rune型、浮点型、复数。举个例子，一个无类型的整数常量除以一个无类型的复数常量，结果是一个无类型的复数常量。</p>

<p>常量的<a href="#Comparison_operators">比较</a>结果总是一个无类型的布尔常量。如果左侧的操作数是无类型的<a href="#Operators">移位操作</a>，那结果是一个整数常量，否则常量的类型和左侧操作数的类型一样，当然它必须是整型(§<a href="#Arithmetic_operators">算术运算符</a>)。对于无类型常量进行操作，结果总是无类型常量(也就是布尔、整型、浮点型、复数，或是字符串常量)。</p>

<pre>
const a = 2 + 3.0          // a == 5.0   (无类型浮点数常量)
const b = 15 / 4           // b == 3     (无类型整数常量)
const c = 15 / 4.0         // c == 3.75  (无类型浮点数常量)
const Θ float64 = 3/2      // Θ == 1.5   (类型 float64)
const d = 1 &lt;&lt; 3.0         // d == 8     (无类型整数常量)
const e = 1.0 &lt;&lt; 3         // e == 8     (无类型整数常量)
const f = int32(1) &lt;&lt; 33   // f == 0     (类型 int32)
const g = float64(2) &gt;&gt; 1  // illegal    (float64(2) 有类型浮点数常量)
const h = "foo" &gt; "bar"    // h == true  (无类型布尔常量)
const j = true             // j == true  (无类型布尔常量)
const k = 'w' + 1          // k == 'x'   (无类型rune常量)
const l = "hi"             // l == "hi"  (无类型字符串常量)
const m = string(k)        // m == "x"   (类型 string)
const Σ = 1 - 0.707i       //            (无类型复数常量)
const Δ = Σ + 2.0e-4       //            (无类型复数常量)
const Φ = iota*1i - 1/1i   //            (无类型复数常量)
</pre>

<p>对于无类型整型、rune型或是浮点数常量应用内置函数<code>complex</code>，得出无类型复数常量。</p>

<pre>
const ic = complex(0， c)   // ic == 3.75i (u无类型复数常量)
const iΘ = complex(0， Θ)   // iΘ == 1.5i  (类型 complex128)
</pre>

<p>常量表达式总是精确值。内部的值或是常量本身需要的精度要明显高于语言的预声明类型支持的精度。下面是合法的声明：</p>

<pre>
const Huge = 1 &lt;&lt; 100
const Four int8 = Huge &gt;&gt; 98
</pre>

<p><em>有类型</em>常量必须能够精确地表示常量类型的值。下面的常量表达式就是不合法的：</p>

<pre>
uint(-1)     // -1 不能用 uint 表示
int(3.14)    // 3.14 不能用 int 表示
int64(Huge)  // 1&lt;&lt;100 不能用 int64 表示
Four * 300   // 300 不能用 int8 表示
Four * 100   // 400 不能用 int8 表示
</pre>

<p>一元取反运算符<code>^</code>用于掩码：掩码对于无符号常量总是全1，对于有类型和无类型的常量总是 -1。</p>

<pre>
^1         // 无类型整型常量，值为 -2
uint8(^1)  // error， same as uint8(-2)， out of range
^uint8(1)  // typed uint8 constant， same as 0xFF ^ uint8(1) = uint8(0xFE)
int8(^1)   // same as int8(-2)
^int8(1)   // same as -1 ^ int8(1) = -2
</pre>

<p>实现限制：一个编译器在计算无类型浮点数或是复数常量表达式的时候，可能会用四舍五入；可以参看<a href="#Constants">常量</a>节的实现限制。这种四舍五入可能导致一个浮点数常量不能精确表示为整数，尽管如果从无限精度上看它是一个整数。</p>

<!--
<p>
<span class="alert">
TODO: perhaps ^ should be disallowed on non-uints instead of assuming twos complement.
Also it may be possible to make typed 常量 more like variables， at the cost of fewer
overflow etc. errors being caught.
</span>
</p>
-->

<h3 id="Order_of_evaluation">求值顺序</h3>

<p>当对一个表达式的<a href="#Operands">operands</a> 、<a href="#Assignments">赋值</a>，或是<a href="#Return_statements">return语句</a>，所有的函数调用，方法调用以及通信操作进行求值的时候，它们按照词法的从左到右的顺序。</p>

<p>下面的语句</p>
<pre>
y[f()]， ok = g(h()， i()+x[j()]， &lt;-c)， k()
</pre>
<p>函数调用以及通信以<code>f()</code>，<code>h()</code>，<code>i()</code>，<code>j()</code>，<code>&lt;-c</code>，<code>g()</code>，<code>k()</code>的顺序进行。然而相比于<code>x</code>的求值以及下标操作，<code>y</code>的求值顺序是未指定的。</p>

<pre>
a := 1
f := func() int { a = 2; return 3 }
x := []int{a， f()}  // x may be [1， 3] or [2， 3]: evaluation order between a and f() is not specified
</pre>

<p>在单个表达式内的浮点数操作根据结合性进行求值。可以用括号来改变这种结合性。譬如在表达式<code>x + (y + z)</code>中<code>y + z</code>在<code>x</code>之前操作。</p>

<h2 id="Statements">语句</h2>

<p>语句控制了程序的执行。</p>

<pre class="ebnf">
<a id="Statement">Statement</a> =
  <a href="#Declaration" class="noline">Declaration</a> | <a href="#LabeledStmt" class="noline">LabeledStmt</a> | <a href="#SimpleStmt" class="noline">SimpleStmt</a> |
  <a href="#GoStmt" class="noline">GoStmt</a> | <a href="#ReturnStmt" class="noline">ReturnStmt</a> | <a href="#BreakStmt" class="noline">BreakStmt</a> | <a href="#ContinueStmt" class="noline">ContinueStmt</a> | <a href="#GotoStmt" class="noline">GotoStmt</a> |
  <a href="#FallthroughStmt" class="noline">FallthroughStmt</a> | <a href="#Block" class="noline">Block</a> | <a href="#IfStmt" class="noline">IfStmt</a> | <a href="#SwitchStmt" class="noline">SwitchStmt</a> | <a href="#SelectStmt" class="noline">SelectStmt</a> | <a href="#ForStmt" class="noline">ForStmt</a> |
    <a href="#DeferStmt" class="noline">DeferStmt</a> .

<a id="SimpleStmt">SimpleStmt</a> = <a href="#EmptyStmt" class="noline">EmptyStmt</a> | <a href="#ExpressionStmt" class="noline">ExpressionStmt</a> | <a href="#SendStmt" class="noline">SendStmt</a> | <a href="#IncDecStmt" class="noline">IncDecStmt</a> | <a href="#Assignment" class="noline">Assignment</a> | <a href="#ShortVarDecl" class="noline">ShortVarDecl</a> .
</pre>


<h3 id="Empty_statements">空语句</h3>
<p>空语句什么也不做。</p>

<pre class="ebnf">
<a id="EmptyStmt">EmptyStmt</a> = .
</pre>

<h3 id="Labeled_statements">标号语句</h3>
<p>
<code>goto</code>、<code>break</code>或是<code>continue</code>会用到标号语句。
</p>

<pre class="ebnf">
<a id="LabeledStmt">LabeledStmt</a> = <a href="#Label" class="noline">Label</a> ":" <a href="#Statement" class="noline">Statement</a> .
<a id="Label">Label</a>       = <a href="#identifier" class="noline">identifier</a> .
</pre>

<pre>
Error: log.Panic("error encountered")
</pre>

<h3 id="Expression_statements">表达式语句</h3>
<p>
函数调用、方法调用和接收操作可以出现在语句中；有的时候可能会用到括号。
</p>

<pre class="ebnf">
<a id="ExpressionStmt">ExpressionStmt</a> = <a href="#Expression" class="noline">Expression</a> .
</pre>

<pre>
h(x+y)
f.Close()
&lt;-ch
(&lt;-ch)
</pre>


<h3 id="Send_statements">发送语句</h3>
<p>
发送语句是向管道中送入一个值。管道表达式当然必须是<a href="#Channel_types">管道类型</a>，而值对于管道中的元素类型来说必须是<a href="#Assignability">可赋值的</a>。
</p>

<pre class="ebnf">
<a id="SendStmt">SendStmt</a> = <a href="#Channel" class="noline">Channel</a> "&lt;-" <a href="#Expression" class="noline">Expression</a> .
<a id="Channel">Channel</a>  = <a href="#Expression" class="noline">Expression</a> .
</pre>

<p>
管道和求值都是发生在通信之前。在发送可以开始之前，通信是处于阻塞状态；向一个无缓冲管道发送数据，只有接收准备就绪时发送才正常进行；而向一个有缓冲
管道发送数据，只要缓冲区有空间发送便可以进行。如果向一个已经关闭了的管道发送数据，会导致一个<a href="#Run_time_panics">运行时问题</a>。向<code>nil</code>中发送一个数据会导致永远阻塞。
</p>

<pre>
ch &lt;- 3
</pre>

<h3 id="IncDec_statements">自增自减语句</h3>
<p>++和--语句对操作数增加或是减少一个无类型的<a href="#Constants">常量</a><code>1</code>。为了能够赋值，要求操作数必须是<a href="#Address_operators">可寻址的</a>或是一个map的下标表达式。</p>

<pre class="ebnf">
<a id="IncDecStmt">IncDecStmt</a> = <a href="#Expression" class="noline">Expression</a> ( "++" | "--" ) .
</pre>

<p>下面的<a href="#Assignments">赋值语句</a>在语义上是等价的：</p>

<pre class="grammar">
自增自减语句          赋值
x++                 x += 1
x--                 x -= 1
</pre>


<h3 id="Assignments">赋值</h3>
<pre class="ebnf">
<a id="Assignment">Assignment</a> = <a href="#ExpressionList" class="noline">ExpressionList</a> <a href="#assign_op" class="noline">assign_op</a> <a href="#ExpressionList" class="noline">ExpressionList</a> .
<a id="assign_op">assign_op</a> = [ <a href="#add_op" class="noline">add_op</a> | <a href="#mul_op" class="noline">mul_op</a> ] "=" .
</pre>

<p>左边的每个操作数都必须是<a href="#Address_operators">可寻址的</a>或是一个map的下标表达式，或是<a href="#Blank_identifier">空标识符</a>。操作数可以带括号。</p>

<pre>
x = 1
*p = f()
a[i] = 23
(k) = &lt;-ch  // 如同： k = &lt;-ch
</pre>

<p>如果<code>x</code>是一个二元算术运算，那么<em>赋值运算</em><code>x</code><em>op</em><code>=</code><code>y</code>就等价于<code>x</code><code>=</code><code>x</code><em>op</em><code>y</code>，其中<code>x</code>只会计算一次。运算符<em>op</em><code>=</code>是一个整体。在该赋值运算中，运算符的左侧和右侧都必须只是单值表达式。</p>

<pre>
a[i] &lt;&lt;= 2
i &amp;^= 1&lt;&lt;n
</pre>

<p>
一个元组赋值是将一个多值赋值给多个变量，其中有两种形式。第一种，运算符的右侧是一个多值表达式，譬如函数调用或是<a href="#Channel_types">管道</a>或是<a href="#Map_types">map</a>或是<a href="#Type_assertions">类型断言</a>。这样，运算符左侧变量的数量必须匹配右侧值的数量。举个例子，如果<code>f</code>返回两个值，
</p>

<pre>
x， y = f()
</pre>

<p>
把第一个值赋值给<code>x</code>，把第二个赋值给<code>y</code>。<a href="#Blank_identifier">空标识符</a>提供了忽略多值表达式某一个值的方式：
</p>

<pre>
x， _ = f()  // 忽略 f() 的第二个返回值
</pre>

<p>第二种形式，运算符左侧的数量应该等于右侧表达式的数量，每一个右侧表达式都是单值，这种情况下右侧第<em>n</em>个表达式的值赋值给左侧第<em>n</em>个操作数。
</p>

<p>赋值运算分两步。第一步，对于<a href="#Indexes">下标表达式</a>和<a href="#Address_operators">指针解析</a>表达式(包括<a href="#Selectors">选择子</a>中的隐式指针解析)会<a href="#Order_of_evaluation">以通常的顺序进行求值</a>；第二步，按从左到右的顺序进行赋值。</p>

<pre>
a， b = b， a  // 交换 a 和 b

x := []int{1， 2， 3}
i := 0
i， x[i] = 1， 2  // i = 1， x[0] = 2

i = 0
x[i]， i = 2， 1  // x[0] = 2， i = 1

x[0]， x[0] = 1， 2  // set x[0] = 1， then x[0] = 2 (so x[0] == 2 at end)

x[1]， x[3] = 4， 5  // set x[1] = 4， then panic setting x[3] = 5.

type Point struct { x， y int }
var p *Point
x[2]， p.x = 6， 7  // set x[2] = 6， then panic setting p.x = 7

i = 2
x = []int{3， 5， 7}
for i， x[i] = range x {  // set i， x[2] = 0， x[0]
  break
}
// after this loop， i == 0 and x == []int{3， 5， 3}
</pre>

<p>在赋值中，每一个值对于要赋值的操作数来说，应该是<a href="#Assignability">可赋值的</a>。如果一个无类型的<a href="#Constants">constant</a>赋值给一个变量或是一个接口类型，那么常量会<a href="#Conversions">转换</a>成<code>bool</code>， <code>rune</code>， <code>int</code>， <code>float64</code>，
<code>complex128</code> or <code>string</code>类型，具体取决于它本身是布尔、rune、整数、浮点数、复数还是字符串常量。</p>


<h3 id="If_statements">if语句</h3>

<p>if语句会根据一个布尔表达式的结果进行条件执行。如果布尔表达式结果为true，那么执行if分支，否则，有else的话就执行else分支。</p>

<pre class="ebnf">
<a id="IfStmt">IfStmt</a> = "if" [ <a href="#SimpleStmt" class="noline">SimpleStmt</a> ";" ] <a href="#Expression" class="noline">Expression</a> <a href="#Block" class="noline">Block</a> [ "else" ( <a href="#IfStmt" class="noline">IfStmt</a> | <a href="#Block" class="noline">Block</a> ) ] .
</pre>

<pre>
if x &gt; max {
  x = max
}
</pre>

<p>表达式可以前置一个<a href="#SimpleStmt">简单语句</a>，该语句在表达式之前进行计算。</p>

<pre>
if x := f(); x &lt; y {
  return x
} else if x &gt; z {
  return z
} else {
  return y
}
</pre>


<h3 id="Switch_statements">switch语句</h3>

<p>switch语句是多路分支执行。将一个表达式或是类型跟一系列case进行比较，匹配的分支会被执行。</p>

<pre class="ebnf">
<a id="SwitchStmt">SwitchStmt</a> = <a href="#ExprSwitchStmt" class="noline">ExprSwitchStmt</a> | <a href="#TypeSwitchStmt" class="noline">TypeSwitchStmt</a> .
</pre>

<p>switch有两种形式：一种是表达式switch，一种是类型switch。在表达式switch中，case会指定一个表达式与条件表达式进行比较。在类型switch中，case会指定一个类型与条件类型进行比较。在switch语句中条件表达式的值只会计算一次。</p>

<h4 id="Expression_switches">表达式switch</h4>

<p>在表达式switch中，条件表达式和case表达式都会求值，不要求是常量，求值是从左到右、从上到下。和条件表达式的值匹配的第一个case会触发关联语句的执行；其他的跳过。如果没有case匹配，但是有default部分，那么执行default部分。default顶多指定一个，位置随意。如果缺少条件表达式，会认为总是<code>true</code>。</p>

<pre class="ebnf">
<a id="ExprSwitchStmt">ExprSwitchStmt</a> = "switch" [ <a href="#SimpleStmt" class="noline">SimpleStmt</a> ";" ] [ <a href="#Expression" class="noline">Expression</a> ] "{" { <a href="#ExprCaseClause" class="noline">ExprCaseClause</a> } "}" .
<a id="ExprCaseClause">ExprCaseClause</a> = <a href="#ExprSwitchCase" class="noline">ExprSwitchCase</a> ":" { <a href="#Statement" class="noline">Statement</a> ";" } .
<a id="ExprSwitchCase">ExprSwitchCase</a> = "case" <a href="#ExpressionList" class="noline">ExpressionList</a> | "default" .
</pre>

<p>每一个case或是default的表达式的最后一个语句可以是(可以带<a href="#Labeled_statements">标记</a>的)<a href="#Fallthrough_statements">fallthrough语句</a>语句，它会把控制流从当前子句转移到下一个子句；否则整个switch语句会结束。fallthrough只能作为表达式的最后一个语句；但是不能是最后一个表达式。</p>

<p>如果条件表达式是一个无类型的常量，那么它会<a href="#Conversions">转换</a>成它的<a href="#Constants">默认类型</a>；如果它是无类型布尔值，那么它转换成<code>bool</code>类型。<code>nil</code>不能作为一个条件表达式。</p>

<p>如果case表达式是无类型的，它会它会<a href="#Conversions">转换</a>成条件表达式的类型。对于每一个case表达式<code>x</code>和条件表达式<code>t</code>，<code>x == t</code>必须是合法的<a href="#Comparison_operators">比较运算</a>。</p>

<p>换句话说，条件表达式就像是临时声明和初始化的一个变量<code>t</code>，只不过没有显示指定类型；然后<code>t</code>会和每一个case表达式<code>x</code>来比较相等性。</p>

<p>表达式可以前置一个<a href="#SimpleStmt">简单语句</a>，该语句在表达式之前进行计算。</p>

<pre>
switch tag {
default: s3()
case 0， 1， 2， 3: s1()
case 4， 5， 6， 7: s2()
}

switch x := f(); {  // 缺少表达式的认为是 true
case x &lt; 0: return -x
default: return x
}

switch {
case x &lt; y: f1()
case x &lt; z: f2()
case x == 4: f3()
}
</pre>
<p>实现限制：一个编译器可能不允许多路case的表达式中出现相同的常量。譬如，当前的编译器就不允许case表达式中有重复的整数、浮点数或是字符串常量。</p>

<h4 id="Type_switches">类型switch</h4>

<p>类型switch比较的是类型，而不是值。它和表达式switch很像，只不过它用的是一个特殊的<a href="#Type_assertions">类型断言</a>作为条件表达式，其中用了保留字<code>type</code>而不是一个真实的类型。</p>

<pre>switch x.(type) {
// cases
}
</pre>

<p>case是用真是的类型<code>T</code>去和表达式<code>x</code>的动态类型进行比较。和类型断言一样，<code>x</code>必须是<a href="#Interface_types">接口类型</a>，<code>T</code>必须是费接口类型且实现了接口<code>x</code>。</p>

<pre class="ebnf">
<a id="TypeSwitchStmt">TypeSwitchStmt</a>  = "switch" [ <a href="#SimpleStmt" class="noline">SimpleStmt</a> ";" ] <a href="#TypeSwitchGuard" class="noline">TypeSwitchGuard</a> "{" { <a href="#TypeCaseClause" class="noline">TypeCaseClause</a> } "}" .
<a id="TypeSwitchGuard">TypeSwitchGuard</a> = [ <a href="#identifier" class="noline">identifier</a> ":=" ] <a href="#PrimaryExpr" class="noline">PrimaryExpr</a> "." "(" "type" ")" .
<a id="TypeCaseClause">TypeCaseClause</a>  = <a href="#TypeSwitchCase" class="noline">TypeSwitchCase</a> ":" { <a href="#Statement" class="noline">Statement</a> ";" } .
<a id="TypeSwitchCase">TypeSwitchCase</a>  = "case" <a href="#TypeList" class="noline">TypeList</a> | "default" .
<a id="TypeList">TypeList</a>        = <a href="#Type" class="noline">Type</a> { "，" <a href="#Type" class="noline">Type</a> } .
</pre>

<p>类型表达式(就是TypeSwitchGuard)可以包含<a href="#Short_variable_declarations">短变量声明</a>。如果使用这种形式，变量会在每一个case<a href="#Blocks">块</a>的开始处声明变量；如果case只是指定了一个类型，那么变量就是这种类型，否则就是类型表达式中表达式的类型。</p>

<p>case的类型可能为<a href="#Predeclared_identifiers"><code>nil</code></a>；当类型表达式中表达式是<code>nil</code>值的时候匹配这种case。</p>

<p>给一个<code>interface{}</code>类型的<code>x</code>，下面的类型switch：</p>

<pre>
switch i := x.(type) {
case nil:
  printString("x is nil")
case int:
  printInt(i)  // i 是 int
case float64:
  printFloat64(i)  // i 是 float64
case func(int) float64:
  printFunction(i)  // i 是函数
case bool， string:
  printString("type is bool or string")  // i 是 bool 或是 string
default:
  printString("don't know the type")
}
</pre>

<p>上面还可以如下改写：</p>

<pre>
v := x  // x 只会求值一次
if v == nil {
  printString("x is nil")
} else if i， isInt := v.(int); isInt {
  printInt(i)  // i 是 int
} else if i， isFloat64 := v.(float64); isFloat64 {
  printFloat64(i)  // i 是 float64
} else if i， isFunc := v.(func(int) float64); isFunc {
  printFunction(i)  // i 是函数
} else {
  i1， isBool := v.(bool)
  i2， isString := v.(string)
  if isBool || isString {
    i := v
    printString("type is bool or string")  // i 是 bool 或是 string
  } else {
    i := v
    printString("don't know the type")  // i 是 interface{}
  }
}
</pre>

<p>类型表达式可以前置一个<a href="#SimpleStmt">简单语句</a>，该语句在表达式之前进行计算。</p>

<p>在类型分支中是不允许存在fallthrough语句。</p>

<h3 id="For_statements">for 语句</h3>

<p>for语句来指定需要重复执行的块。迭代在一个条件，或是for子句，或是rang子句的控制之下。</p>

<pre class="ebnf">
<a id="ForStmt">ForStmt</a> = "for" [ <a href="#Condition" class="noline">Condition</a> | <a href="#ForClause" class="noline">ForClause</a> | <a href="#RangeClause" class="noline">RangeClause</a> ] <a href="#Block" class="noline">Block</a> .
<a id="Condition">Condition</a> = <a href="#Expression" class="noline">Expression</a> .
</pre>

<p>有一个简单版本，一个 for 只指定一个块重复执行的条件。每一次迭代的时候会计算表达式的值。如果表达式为空，那么等价于<code>true</code>。</p>

<pre>
for a &lt; b {
  a *= 2
}
</pre>

<p>带一个ForClause的for语句也会在条件的控制之下，但是会有额外的<em>init</em>和<em>post</em>语句，一般是赋值、增加或是减少语句。init语句可以使用<a href="#Short_variable_declarations">短变量声明</a>，而 post 语句不行。</p>

<pre class="ebnf">
<a id="ForClause">ForClause</a> = [ <a href="#InitStmt" class="noline">InitStmt</a> ] ";" [ <a href="#Condition" class="noline">Condition</a> ] ";" [ <a href="#PostStmt" class="noline">PostStmt</a> ] .
<a id="InitStmt">InitStmt</a> = <a href="#SimpleStmt" class="noline">SimpleStmt</a> .
<a id="PostStmt">PostStmt</a> = <a href="#SimpleStmt" class="noline">SimpleStmt</a> .
</pre>

<pre>
for i := 0; i &lt; 10; i++ {
  f(i)
}
</pre>

<p>如果非空，那么 init 语句只会在第一次计算条件之前执行一次；post 语句会在块中的每一次执行完毕之后执行。ForClause 中的每一部分都可以为空，但是<a href="#Semicolons">分号</a>必须保留，除非只有一个条件。如果条件也省略的话，那就认为是<code>true</code>。</p>

<pre>
for cond { S() }    is the same as    for ; cond ; { S() }
for      { S() }    is the same as    for true     { S() }
</pre>

<p>带rang自己的for语句可以迭代数组、分片、字符串或是map的所有元素，或是一个管道中的接受到的值。对于每一个元素，它将<em>迭代的值</em>赋值给<em>迭代的变量</em>，然后执行语句块。</p>

<pre class="ebnf">
<a id="RangeClause">RangeClause</a> = <a href="#Expression" class="noline">Expression</a> [ "，" <a href="#Expression" class="noline">Expression</a> ] ( "=" | ":=" ) "range" <a href="#Expression" class="noline">Expression</a> .
</pre>

<p>range子句的右侧部分叫做<em>范围表达式</em>，它可以是一个数组、数组指针、分片、字符串、map和管道等。因为要赋值，所有左侧的操作数必须是<a href="#Address_operators">可寻址的</a>，或是map下标表达式，它们就是说的迭代变量。如果迭代变量是一个管道，只允许有一个迭代变量，初次之外可以有一个或是两个。如果第二个迭代变量是<a href="#Blank_identifier">空标识符</a>，那么range子句等价于只有一个变量出现的子句。</p>

<p>范围表达式只在循环开始执行之前计算一次，除非表达式是一个数组，这种情况下要依赖于表达式，它可能不需要计算(看下面)。每一次迭代左侧的函数调用会计算一次。对于每一次迭代，迭代值如下生成：</p>

<pre class="grammar">
范围表达式                         第一个值         第二个值 (如果存在的话)

array or slice  a  [n]E， *[n]E， or []E    index    i  int    a[i]       E
string          s  string type            index    i  int    see below  rune
map             m  map[K]V                key      k  K      m[k]       V
channel         c  chan E                 element  e  E
</pre>

<ol>
<li>对于数组、数组指针或是分片值<code>a</code>来说，下标迭代值已升序生成，从0开始。有一种特殊场景，只有当第一个迭代参数存在的情况下，range循环生成0到<code>len(a)</code>的迭代值，而不是索引到数组或是分片。对于一个<code>nil</code>分片，迭代的数量为0。</li>

<li>对于字符串类型，range子句迭代字符串中每一个Unicode代码点，从下标0开始。在连续迭代中，下标值会是下一个utf-8代码点的第一个字节的下标，而第二个值类型是<code>rune</code>，会是对应的代码点。如果迭代遇到了一个非法的Unicode序列，那么第二个值是<code>0xFFFD</code>，也就是Unicode的替换字符，然后下一次迭代只会前进一个字节。</li>

<li>map中的迭代顺序是没有指定的，也不保证两次迭代是一样的。如果map元素在迭代过程中被删掉了，那么对应的迭代值不会再产生。如果map元素在迭代中插入了，这种行为是依赖于实现的，但是每个元素的迭代值顶多出现一次。如果map是<code>nil</code>，那么迭代次数为0。</li>

<li>对于管道，迭代值就是下一个send到管道中的值，除非管道被<a href="#Close">关闭</a>了。如果管道是<code>nil</code>，范围表达式永远阻塞。</li>
</ol>

<p>迭代值会赋值给相应的迭代变量，就像是<a href="#Assignments">赋值语句</a>。</p>

<p>迭代变量可以使用<a href="#Short_variable_declarations">短变量声明</a>(<code>:=</code>)。这种情况，它们的类型设置为相应迭代值的类型，它们的<a href="#Declarations_and_scope">域</a>是到for语句的结尾，它们可以在每一次迭代中复用。如果迭代变量是在for语句外声明的，那么执行之后它们的值是最后一次迭代的值。</p>

<pre>
var testdata *struct {
  a *[7]int
}
for i， _ := range testdata.a {
  // testdata.a is never evaluated; len(testdata.a) is constant
  // i ranges from 0 to 6
  f(i)
}

var a [10]string
m := map[string]int{"mon":0， "tue":1， "wed":2， "thu":3， "fri":4， "sat":5， "sun":6}
for i， s := range a {
  // type of i is int
  // type of s is string
  // s == a[i]
  g(i， s)
}

var key string
var val interface {}  // value type of m is assignable to val
for key， val = range m {
  h(key， val)
}
// key == last map key encountered in iteration
// val == map[key]

var ch chan Work = producer()
for w := range ch {
  doWork(w)
}
</pre>


<h3 id="Go_statements">go语句</h3>

<p>go语句在一个独立的线程中执行一个函数或是方法调用；这个线程或是叫做<em>goroutine</em>，它和原来的线程在同一地址空间中。</p>

<pre class="ebnf">
<a id="GoStmt">GoStmt</a> = "go" <a href="#Expression" class="noline">Expression</a> .
</pre>

<p>表达式必须是能够调用的。在调用的go例程中函数值和参数都会被<a href="#Calls">正常求值</a>；不过不像常规的函数调用，这个go例程不会等待调用函数的结束；相反的，函数在一个新的例程中开始执行。在函数终止的时候，这个go例程也就终止了；如果函数有返回值，那它们会被忽略。</p>

<pre>
go Server()
go func(ch chan&lt;- bool) { for { sleep(10); ch &lt;- true; }} (c)
</pre>


<h3 id="Select_statements">select语句</h3>

<p>select语句从多个<a href="#Send_statements">发送</a>和<a href="#Receive_operator">接收</a>操作中选择一个执行。它看上去像是<a href="#Switch_statements">switch语句</a>，只不过它的每一个case都是通信操作。</p>

<pre class="ebnf"><a id="SelectStmt">SelectStmt</a> = "select" "{" { <a href="#CommClause" class="noline">CommClause</a> } "}" .
<a id="CommClause">CommClause</a> = <a href="#CommCase" class="noline">CommCase</a> ":" <a href="#StatementList" class="noline">StatementList</a> .
<a id="CommCase">CommCase</a>   = "case" ( <a href="#SendStmt" class="noline">SendStmt</a> | <a href="#RecvStmt" class="noline">RecvStmt</a> ) | "default" .
<a id="RecvStmt">RecvStmt</a>   = [ <a href="#ExpressionList" class="noline">ExpressionList</a> "=" | <a href="#IdentifierList" class="noline">IdentifierList</a> ":=" ] <a href="#RecvExpr" class="noline">RecvExpr</a> .
<a id="RecvExpr">RecvExpr</a>   = <a href="#Expression" class="noline">Expression</a> .
</pre>

<p>RecvStmt的case可以使用<a href="#Short_variable_declarations">短变量声明</a>将RecvExpr赋值给一个或是两个变量。RecvExpr必须是一个接收操作。顶多有一个default case，它的位置随意。</p>

<p>select语句的执行按照下面的步骤：</p>

<ol>
<li>select语句中的所有case，接收操作的操作数、管道、发送语句右侧的表达式等都只计算一次，按源文件指定的顺序。</li>

<li>如果有多个case可以进行下去，那么会使用一致随机算法选择一个去执行。否则，如果有default case，那么就执行default；如果没有default，那么select语句会一直阻塞直到有一个通信可以进行；</li>

<li>除非选择的是default case，否则就是执行相应的通信操作；</li>

<li>如果选中的case是一个接收语句并使用了<a href="#Short_variable_declarations">短变量声明</a>或是赋值，那么会把右侧接收的值赋值给左侧的表达式；</li>

<li>选中的case的语句会被执行；</li>
</ol>

<p>因为对<code>nil</code>管道通信永远进行不下去，所以select nil管道又没有default case，那么会永远阻塞。</p>

<pre>
var c， c1， c2， c3 chan int
var i1， i2 int
select {
case i1 = &lt;-c1:
  print("received "， i1， " from c1\n")
case c2 &lt;- i2:
  print("sent "， i2， " to c2\n")
case i3， ok := (&lt;-c3):  // same as: i3， ok := &lt;-c3
  if ok {
    print("received "， i3， " from c3\n")
  } else {
    print("c3 is closed\n")
  }
default:
  print("no communication\n")
}

for {  // send random sequence of bits to c
  select {
  case c &lt;- 0:  // note: 没有语句， 没有 fallthrough， 没有 case 折叠
  case c &lt;- 1:
  }
}

select {}  // 用于阻塞
</pre>


<h3 id="Return_statements">return 语句</h3>

<p>return语句终止当前函数的执行，然后给调用方返回一个结果值(也许没有)。</p>

<pre class="ebnf">
<a id="ReturnStmt">ReturnStmt</a> = "return" [ <a href="#ExpressionList" class="noline">ExpressionList</a> ] .
</pre>

<p>如果一个函数没有返回类型，那么return语句就不能指定返回结果。</p>
<pre>
func noResult() {
  return
}
</pre>

<p>从一个函数返回一个结果，有三种方式：</p>

<ol>
  <li>返回值可以显式地列在return语句中。每一个表达式都必须是单值的，而且<a href="#Assignability">可赋值</a>给函数的返回值类型。
<pre>
func simpleF() int {
  return 2
}

func complexF1() (re float64， im float64) {
  return -7.0， -4.0
}
</pre>
  </li>
  <li>return语句可以是对一个多值函数的调用。这种情况就像是函数的每一个返回值赋值给一个临时变量，然后跟着一个return语句；之后就是前面一个case的场景；
<pre>
func complexF2() (re float64， im float64) {
  return complexF1()
}
</pre>
  </li>
  <li>表达式列表可以为空，如果函数的返回值已经为结果参数指定了名字(§<a href="#Function_types">Function Types</a>)。返回参数就像是普通的局部变量，函数中可以给这些参数赋值。return语句返回的是这些参数的值。
<pre>
func complexF3() (re float64， im float64) {
  re = 7.0
  im = 4.0
  return
}

func (devnull) Write(p []byte) (n int， _ error) {
  n = len(p)
  return
}
</pre>
  </li>
</ol>

<p>不管它们到底是怎么声明的，所有的返回值结果都是初始化为(§<a href="#The_zero_value">0值</a>)。</p>

<!--
<p>
<span class="alert">
TODO: Define when return is required.<br />
</span>
</p>
-->

<h3 id="Break_statements">break语句</h3>

<p>break语句结束for的最内层循环、switch、select的执行。</p>

<pre class="ebnf">
<a id="BreakStmt">BreakStmt</a> = "break" [ <a href="#Label" class="noline">Label</a> ] .
</pre>

<p>如果有一个标号，它必须是在 for/switch/select 语句的周围， 那是执行结束的地方(§<a href="#For_statements">for语句</a>， §<a href="#Switch_statements">switch语句</a>， §<a href="#Select_statements">select语句</a>)。</p>

<pre>
L:
  for i &lt; n {
    switch i {
    case 5:
      break L
    }
  }
</pre>

<h3 id="Continue_statements">continue 语句</h3>

<p>continue语句开始<a href="#For_statements">for语句</a>最内层循环的下一次迭代。</p>

<pre class="ebnf">
<a id="ContinueStmt">ContinueStmt</a> = "continue" [ <a href="#Label" class="noline">Label</a> ] .
</pre>

<p>如果有一个标号，它必须是是在for语句的周围。</p>

<h3 id="Goto_statements">goto 语句</h3>
<p>goto语句会把语句控制跳转到对应的标号处。</p>

<pre class="ebnf">
<a id="GotoStmt">GotoStmt</a> = "goto" <a href="#Label" class="noline">Label</a> .
</pre>

<pre>
goto Error
</pre>

<p>goto语句的跳转不应该造成任何变量的<a href="#Declarations_and_scope">作用域</a>的变化。譬如下面的例子：</p>

<pre>
  goto L  // BAD
  v := 3
L:
</pre>

<p>是错误的，因为跳转到<code>L</code>会跳过<code>v</code>的创建。</p>

<p>一个<a href="#Blocks">块</a>外的goto语句不能跳到块的内部。譬如：</p>

<pre>
if n%2 == 1 {
  goto L1
}
for n &gt; 0 {
  f()
  n--
L1:
  f()
  n--
}
</pre>

<p>是错误的，因为标号<code>L1</code>是在 "for" 语句块内，而<code>goto</code>不是。</p>

<h3 id="Fallthrough_statements">fallthrough 语句</h3>

<p>fallthrough语句会把 switch 语句(§<a href="#Expression_switches">switch</a>)的第一条语句的控制传递给下一条语句。它也可能用在 switch 的最后一个非空的 case 语句，或是 default 语句。</p>

<pre class="ebnf">
<a id="FallthroughStmt">FallthroughStmt</a> = "fallthrough" .
</pre>


<h3 id="Defer_statements">defer 语句</h3>
<p>defer语句在所在的函数结束后调用。</p>

<pre class="ebnf">
<a id="DeferStmt">DeferStmt</a> = "defer" <a href="#Expression" class="noline">Expression</a> .
</pre>

<p>表达式必须是函数或是方法调用。每当 defer 语句要执行的时候，函数值和参数会<a href="#Calls">正常求值</a>并保存，虽然函数并没有调用。defer 函数会以 LIFO 的顺序在函数结束的时候进行调用，这个过程在函数返回给调用者之前。如果 defer 函数是一个<a href="#Function_literals">函数字面量</a>，外围的函数有<a href="#Function_types">命名的返回值参数</a> ，那么 defer 函数可能会访问和修改函数的返回值。如果 defer 函数有任何返回值，它们都会在函数执行结束之后忽略。</p>

<pre>
lock(l)
defer unlock(l)  // 在外层函数返回之前解锁

// 在外层函数返回之前打印 3 2 1 0
for i := 0; i &lt;= 3; i++ {
  defer fmt.Print(i)
}

// f 返回 1
func f() (result int) {
  defer func() {
    result++
  }()
  return 0
}
</pre>

<h2 id="Built-in_functions">内置函数</h2>
<p>内置函数都是<a href="#Predeclared_identifiers">预声明的</a>。它们可以像其他函数一样被调用，只不过有些函数的第一个参数是一个类型而不是一个值。</p>
<p>内置函数并没有标准的类型，所以它们只可以出现在<a href="#Calls">调用表达式</a>中，而不能当函数值。</p>

<pre class="ebnf">
<a id="BuiltinCall">BuiltinCall</a> = <a href="#identifier" class="noline">identifier</a> "(" [ <a href="#BuiltinArgs" class="noline">BuiltinArgs</a> [ "，" ] ] ")" .
<a id="BuiltinArgs">BuiltinArgs</a> = <a href="#Type" class="noline">Type</a> [ "，" <a href="#ExpressionList" class="noline">ExpressionList</a> ] | <a href="#ExpressionList" class="noline">ExpressionList</a> .
</pre>

<h3 id="Close">关闭</h3>

<p>对一个管道<code>c</code>来说，内置函数<code>close(c)</code>说明不再往管道中发送数据。如果<code>c</code>只是个接收管道，这是错误的。向一个关闭的管道发送数据或是再次关闭都会引起一个<a href="#Run_time_panics">运行时异常</a>。关闭nil管道同样引起<a href="#Run_time_panics">运行时异常</a>。调用<code>close</code>，并且先前发送的数据全部接收完毕之后，接收操作会根据管道的类型返回一个0值，但不会引起阻塞。使用多值<a href="#Receive_operator">接收操作</a>可以得到一个测试管道是否关闭的标志。
</p>

<h3 id="Length_and_capacity">长度和容量</h3>

<p>内置函数<code>len</code>和<code>cap</code>接收多种类型作为参数，返回一个<code>int</code>类型的值。实现保证返回的结果可以适合<code>int</code>。</p>

<pre class="grammar">
调用      参数类型          结果

len(s)    string           字符串的字节长度
          [n]T， *[n]T     数组长度 (== n)
          []T              分片长度
          map[K]T          map长度(key的数量）
          chan T           管道缓冲区中排队元素的数量

cap(s)    [n]T， *[n]T     数组长度 (== n)
          []T              分片容量
          chan T           管道缓冲区容量
</pre>

<p>一个分片的容量就是它底层的数组为它提供的元素个数。任何时候都必须满足一下关系：</p>

<pre>
0 &lt;= len(s) &lt;= cap(s)
</pre>

<p>
<code>nil</code>分片、map或是管道的长度和容量都是0。
</p>

<p>当<code>s</code>是一个字符串常量的时候，<code>len(s)</code>表达式也是<a href="#Constants">常量</a>。只要<code>s</code>的类型是数组类型或是指向数组的指针类型，并且<code>s</code>表达式不包括<a href="#Receive_operator">管道接收</a>和<a href="#Calls">函数调用</a>操作，那么<code>len(s)</code>和<code>cap(s)</code>都是常量，并不用去计算<code>s</code>的值。而其他情况下，对<code>len</code>和<code>cap</code>的调用就不是常量，需要计算<code>s</code>而得。</p>

<h3 id="Allocation">分配空间</h3>

<p>内置函数<code>new</code>接受一个类型参数<code>T</code>然后返回<code>*T</code>类型的一个值。存储空间会按(§<a href="#The_zero_value">0值</a>)处那里说明的对值进行初始化。</p>

<pre class="grammar">
new(T)
</pre>

<p>
举个例子：
</p>

<pre>
type S struct { a int; b float64 }
new(S)
</pre>

<p>会动态地为<code>S</code>类型的变量分配空间，将值初始化为(<code>a=0</code>，<code>b=0.0</code>)，然后返回一个<code>*S</code>的值，这个值是分配空间的地址。</p>

<h3 id="Making_slices_maps_and_channels">创建分片、map和管道</h3>

<p>分片、map和管道都是引用类型，所以不需要使用<code>new</code>来分配间址访问的空间。内置函数<code>make</code>带有一个类型<code>T</code>，必须是分片、map或是管道类型，后面跟着可选的跟类型有关的表达式。它返回的值的类型是<code>T</code>(而不是<code>*T</code>)。存储空间也会按(§<a href="#The_zero_value">0值</a>)那里的说明对值进行初始化。</p>

<pre class="grammar">
调用             类型T      结果

make(T， n)        分片       长度可容量都是n的分片
make(T， n， m)    分片       长度是n容量是m的分片

make(T)           map         T类型的 map
make(T， n)       map         T类型的 map，有n个经过初始化的元素

make(T)           管道     T类型的同步管道
make(T， n)       管道     带有长度为n的缓冲区的T类型的异步管道
</pre>


<p>参数<code>n</code>和<code>m</code>必须是整型类型。如果<code>n</code>是个负数或是比<code>m</code>还大，亦或是<code>n</code>或是<code>m</code>不能用<code>int</code>表示，那么会有一个<a href="#Run_time_panics">运行时异常</a>出现。</p>

<pre>
s := make([]int， 10， 100)       //  len(s) == 10， cap(s) == 100 的分片
s := make([]int， 10)            // len(s) == cap(s) == 10 的分片
c := make(chan int， 10)         // 缓冲区长度为 10 的管道
m := make(map[string]int， 100)  // 有 100 个初始化元素的 map
</pre>


<h3 id="Appending_and_copying_slices">分片的追加以及拷贝</h3>

<p>内置函数 append 和 copy 是两个常用的分片操作。这两个函数的结果不依赖于数据是否有重叠。</p>

<p><a href="#Function_types">可变</a>函数<code>append</code>向分片类型<code>S</code>的值<code>s</code>追加0个或是多个值<code>x</code>，然后返回结果分片，类型也是<code>S</code>。<code>x</code>的值会传给参数<code>...T</code>，其中<code>T</code>是<code>S</code>的<a href="#Slice_types">元素类型</a>，运用<a href="#Passing_arguments_to_..._parameters">参数传递规则</a>。有一种特殊的情况，<code>append</code>第一个参数是<code>[]byte</code>类型，第二个参数是 string 类型，后面跟着<code>...</code>，这种形式下追加的是 string 的字节。</p>

<pre class="grammar">
append(s S， x ...T) S  // T是S的元素类型
</pre>

<p>如果<code>s</code>的容量不是足够大以至于不能容下要增加的值，那么<code>append</code>会分配新的充分大的底层数组来容纳现有的分片元素以及要追加的元素。否则 append 重用底层数组。</p>

<pre>s0 := []int{0, 0}
s1 := append(s0, 2)                // 追加单个元素     s1 == []int{0, 0, 2}
s2 := append(s1, 3, 5, 7)          // 追加多个元素    s2 == []int{0, 0, 2, 3, 5, 7}
s3 := append(s2, s0...)            // 追加一个分片             s3 == []int{0, 0, 2, 3, 5, 7, 0, 0}
s4 := append(s3[3:6], s3[2:]...)   // 追加重叠分片    s4 == []int{3, 5, 7, 2, 3, 5, 7, 0, 0}

var t []interface{}
t = append(t, 42, 3.1415, "foo")   //                             t == []interface{}{42, 3.1415, "foo"}

var b []byte
b = append(b, "bar"...)            // 追加字符串      b == []byte{'b', 'a', 'r' }
</pre>

<p><code>copy</code>函数从<code>src</code>拷贝分片元素到<code>dst</code>中，然后返回拷贝的元素数量。两者参数必须具有<a href="#Type_identity">一致的</a>元素类型<code>T</code>，并且对于<code>[]T</code>是<a href="#Assignability">可赋值的</a>。拷贝的元素数量是 min{<code>len(src)</code>, <code>len(dst)</code>.}。一种特殊情况是，<code>copy</code>第一个参数是<code>[]byte</code>，第二个参数是 string 类型，这种情况是把字符串的字节。</p>

<pre class="grammar">
copy(dst， src []T) int
copy(dst []byte， src string) int
</pre>

<p>例子：</p>

<pre>
var a = [...]int{0， 1， 2， 3， 4， 5， 6， 7}
var s = make([]int， 6)
var b = make([]byte， 5)
n1 := copy(s， a[0:])            // n1 == 6， s == []int{0， 1， 2， 3， 4， 5}
n2 := copy(s， s[2:])            // n2 == 4， s == []int{2， 3， 4， 5， 4， 5}
n3 := copy(b， "Hello， World!")  // n3 == 5， b == []byte("Hello")
</pre>


<h3 id="Deletion_of_map_elements">map元素的删除</h3>

<p>内置函数<code>delete</code>可以从<a href="#Map_types">map</a><code>m</code>中删除键值为<code>k</code>的元素，而<code>k</code>的类型对于<code>m</code>的key类型来说必须是<a href="#Assignability">可赋值的</a>。</p>

<pre class="grammar">
delete(m， k)  // 从 m 中移除 m[k]
</pre>

<p>如果元素<code>m[k]</code>不存在的话， <code>delete</code>不执行其他操作；如果对 nil 进行<code>delete</code>调用引起一个<a href="#Run_time_panics">运行时异常</a>。</p>

<h3 id="Complex_numbers">复数操作</h3>

<p>有三个函数用来操作复数。内置函数<code>complex</code>根据一个浮点型的实部和虚部构造一个复数，函数<code>real</code>和<code>imag</code>分别获取一个复数的实部和虚部。</p>

<pre class="grammar">
complex(realPart， imaginaryPart floatT) complexT
real(complexT) floatT
imag(complexT) floatT
</pre>

<p>参数的类型和返回值类型是匹配的。对于<code>complex</code>来说，两个参数需要是相同的浮点数类型，返回值是对应浮点数类型的复数类型：<code>complex64</code>对应<code>float32</code>，<code>complex128</code>对应code>float64</code>。<code>real</code> and <code>imag</code>函数正好相反。总之：复数 <code>z</code> <code>==</code><code>complex(real(z)</code>,<code>imag(z))</code>。</p>

<p>这几个函数的操作数是常量的话，那么返回值就是常量。</p>

<pre>
var a = complex(2， -2)             // complex128
var b = complex(1.0， -1.4)         // complex128
x := float32(math.Cos(math.Pi/2))  // float32
var c64 = complex(5， -x)           // complex64
var im = imag(b)                   // float64
var rl = real(c64)                 // float32
</pre>

<h3 id="Handling_panics">异常处理</h3>

<p>有两个内置函数<code>panic</code>和<code>recover</code>用来抛出或是处理<a href="#Run_time_panics">运行时的异常</a>和一些程序定义的错误。</p>

<pre class="grammar">
func panic(interface{})
func recover() interface{}
</pre>

<p>当一个函数<code>F</code>调用<code>panic</code>，那么<code>F</code>的正常执行会立刻终止。那些<a href="#Defer_statements">defer</a>函数会以通常的方式执行完，然后<code>F</code>返回给它的调用方。对于<code>F</code>来说，它的行为就像是自己调用了<code>panic</code>。然后会一直执行直到本goroutine停止执行。之后，程序会终止掉，报告一个错误条件，包括传递给<code>panic</code>的参数。终止的序列我们叫 <em>panicking</em>。
</p>

<pre>
panic(42)
panic("unreachable")
panic(Error("cannot parse"))
</pre>

<p><code>recover</code>函数允许程序去管理 panicking goroutine。执行<code>recover</code>调用，panicking序列会被复原成正常执行流，而且能够获取到传给你<code>panic</code>的参数。如果<code>recover</code>是在defer函数外侧进行调用的，那么它不会停止panicking序列。这种情况，或是goroutine不在panicking，或是传递给<code>panaic</code>的参数是<code>nil</code>，那么<code>recover</code>返回<code>nil</code>。</p>

<p>下面例子中的<code>protect</code>函数调用了参数<code>g</code>，然后会保护调用者<code>protect</code>出现运行时异常。</p>

<pre>
func protect(g func()) {
  defer func() {
    log.Println("done")  // Println executes normally even if there is a panic
    if x := recover(); x != nil {
      log.Printf("run time panic: %v"， x)
    }
  }()
  log.Println("start")
  g()
}
</pre>


<h3 id="Bootstrapping">引导</h3>

<p>当前的实现提供了几个内置的有用的引导函数。为了完整性，我们在这里也对它们进行说明，然而不会保证语言中一直存在。它们不返回结果。</p>

<pre class="grammar">
函数        行为

print      输出所有的参数；参数的格式化是跟实现有关的；
println    跟 print 函数类型，不过这里在参数之间加上空白以及在结束的时候添加换行；
</pre>


<h2 id="Packages">包</h2>

<p>go程序是由链接在一起的<em>包</em>构成的。每一个包则是由一个或是多个源文件构建起来的，源文件中包含常量、类型、变量、函数声明以及一些其他属于包的可以包内访问的东西。这些元素可以<a href="#Exported_identifiers">导出</a>，然后为另外一个包所使用。</p>

<h3 id="Source_file_organization">源文件组织</h3>
<p>每一个源文件由若干部分构成，首先是一个定义了该文件所属的包的子句；其次是一系列的可以为空的包的导入声明，声明希望使用的包；紧接着可以是一些函数、类型、变量或是常量声明，不过也可以么有。</p>

<pre class="ebnf">
<a id="SourceFile">SourceFile</a>       = <a href="#PackageClause" class="noline">PackageClause</a> ";" { <a href="#ImportDecl" class="noline">ImportDecl</a> ";" } { <a href="#TopLevelDecl" class="noline">TopLevelDecl</a> ";" } .
</pre>

<h3 id="Package_clause">包子句</h3>

<p>每个源文件开始于一个包子句，该子句定义了该文件属于的包。</p>

<pre class="ebnf">
<a id="PackageClause">PackageClause</a>  = "package" <a href="#PackageName" class="noline">PackageName</a> .
<a id="PackageName">PackageName</a>    = <a href="#identifier" class="noline">identifier</a> .
</pre>

<p>包名不能是<a href="#Blank_identifier">空白标识符</a>。</p>

<pre>
package math
</pre>

<p>多个文件可能共享同一个包名，这时候它们构成包的一个实现。一个包的实现应满足所有的源文件位于相同的目录下。</p>

<h3 id="Import_declarations">导入声明</h3>

<p>一个导入声明指明依赖功能的<em>imported</em>的包(<a href="#Program_initialization_and_execution">程序的初始化和执行</a>)的源文件，之后便可以使用包中<a href="#Exported_identifiers">导出</a>的标识符。导入的名字(包名)会用于访问，导入的路径ImportPath指定的要导入的包。</p>

<pre class="ebnf">
<a id="ImportDecl">ImportDecl</a>       = "import" ( <a href="#ImportSpec" class="noline">ImportSpec</a> | "(" { <a href="#ImportSpec" class="noline">ImportSpec</a> ";" } ")" ) .
<a id="ImportSpec">ImportSpec</a>       = [ "." | <a href="#PackageName" class="noline">PackageName</a> ] <a href="#ImportPath" class="noline">ImportPath</a> .
<a id="ImportPath">ImportPath</a>       = <a href="#string_lit" class="noline">string_lit</a> .
</pre>

<p>在<a href="#Qualified_identifiers">限定标识符</a>中的包名用来限制源文件所在的包中导出的标识符。它是声明在<a href="#Blocks">文件块</a>作用域。如果包名省略，那么默认使用<a href="#Package_clause">包子句</a>中的标识符。如果显示地用一个点号(<code>.</code>)作为名称，那么包所有导出的<a href="#Blocks">包块</a>一级的标识符会声明在导入文件的文件块域内，访问的时候不需要再加限定符。</p>

<p>ImportPath的形式依赖于实现，但是它通常是编译包的文件全路径的子串，也可以是相对于包安装位置的路径。</p>

<p>实现要求：一个编译器可以要求ImportPaths是一个非空串，而且只能包含<a href="http://www.unicode.org/versions/Unicode6.0.0/">Unicode</a>L、M、N、P和S分类的字符串，也可以是不包括<code>!"#$%&amp;'()*，:;&lt;=&gt;?[\]^`{|}</code>和Unicode替换字符串U+FFFD。</p>

<p>假定我们有一个路径<code>"lib/math"</code>的<code>math</code>包，它导出了<code>Sin</code>，那么<code>Sin</code>可以如此访问：</p>

<pre class="grammar">
导入声明          Sin的局部名称

import   "lib/math"         math.Sin
import M "lib/math"         M.Sin
import . "lib/math"         Sin
</pre>

<p>导入声明建立了一个包和导入包的依赖关系。一个包导入它本身，或是没有用任何导入包的东西，是不允许的。如果导入一个包只是为了其初始化的效果，可以使用<a href="#Blank_identifier">空</a>
标识符作为导入的包名：</p>

<pre>
import _ "lib/math"
</pre>


<h3 id="An_example_package">一个包的例子</h3>

<p>下面是一个实现了并发的素数筛的完整的 Go 包：</p>

<pre>
package main

import "fmt"

// Send the sequence 2， 3， 4， … to channel 'ch'.
func generate(ch chan&lt;- int) {
  for i := 2; ; i++ {
    ch &lt;- i  // Send 'i' to channel 'ch'.
  }
}

// Copy the values from channel 'src' to channel 'dst'，
// removing those divisible by 'prime'.
func filter(src &lt;-chan int， dst chan&lt;- int， prime int) {
  for i := range src {  // Loop over values received from 'src'.
    if i%prime != 0 {
      dst &lt;- i  // Send 'i' to channel 'dst'.
    }
  }
}

// The prime sieve: Daisy-chain filter processes together.
func sieve() {
  ch := make(chan int)  // Create a new channel.
  go generate(ch)       // Start generate() as a subprocess.
  for {
    prime := &lt;-ch
    fmt.Print(prime， "\n")
    ch1 := make(chan int)
    go filter(ch， ch1， prime)
    ch = ch1
  }
}

func main() {
  sieve()
}
</pre>

<h2 id="Program_initialization_and_execution">程序初始化和执行</h2>

<h3 id="The_zero_value">0 值</h3>
<p>
不管是通过声明，还是<code>make</code>或是<code>new</code>，只要为了保存一个值创造了空间但是却没有显式地初始化，那么这些空间都有默认值。 这样的值的每一个元素都会根据它的类型
被<em>0 值</em>化：对布尔类型值是<code>false</code>，对整数值是<code>0</code>，对浮点数值是<code>0.0</code>，对字符串是<code>""</code>，其他剩下的<code>nil</code> 的指针、函数、
接口、分片、管道和映射等都是<code>nil</code>。而且这个初始化是递归进行的，所以说，如果是个结构体数组的话，那么，里面的每一个元素都会被 0 值，只要它没有被指定。
</p>
<p>
下面的两个简单声明等价：
</p>

<pre>
var i int
var i int = 0
</pre>

<p>
看下面
</p>

<pre>
type T struct { i int; f float64; next *T }
t := new(T)
</pre>

<p>
接下来有结果：
</p>

<pre>
t.i == 0
t.f == 0.0
t.next == nil
</pre>

<p>
当然，如果是下面还是一样：
</p>

<pre>
var t T
</pre>

<h3 id="Program_execution">程序执行</h3>
<p>一个没有任何import的包，会初始化所有包一级的变量，然后在函数
<pre>
func init()
</pre>
中对于包一级的函数进行调用。</p>

<p>一个包可能有多个<code>init</code>函数，也可以是在同一个文件中。这种情况下，它们的调用顺序是未指定的。</p>
<p>在一个包内，包一级的变量会被初始化，常量会被求值，按照它们的依赖关系：如果<code>A</code>的初始化依赖于<code>B</code>的值，那么<code>A</code>会在<code>B</code>之后设定。循环依赖是一种错误。对于依赖的分析完全是词法一级的：当<code>A</code>用到了<code>B</code>，那么<code>A</code>就依赖<code>B</code>，其中包括在初始化中用到了，或是函数调用用到了。如果两个变量是互相独立的，那么按照它们在源文件中的顺序进行初始化。依赖分析是针对每个包进行的，如果<code>A</code>的初始化用到了另外一个包中的<code>B</code>，那么结果是未指定的。</p>

<p><code>init</code>函数不能再程序中的任何地方进行应用，也就是说它不能显示调用或是把它赋值给一个函数变量。</p>
<p>如果一个包有import，那么导入包的初始化会在包的初始化之前完成。如果一个包<code>P</code>被多次import，它也只会被初始化一次。</p>
<p>导入的包会进行处理，保证不会出现初始化的循环依赖。</p>
<p>一个完整的程序需要链接唯一的不需要导入的包。main的报名必须是<code>main</code>，同时必须要有一个<code>main</code>函数，不带任何参数，也不返回任何值。</p>

<pre>
func main() { … }
</pre>

<p>程序通过初始化main包，然后调用<code>main</code>函数开始执行。当<code>main</code>结束的时候，程序便结束了，不管有没有其他的(非<code>main</code>) goroutines 是否完成。</p>

<p>包的初始化&mdash;变量的初始化，以及<code>init</code>的调用&mdash;是在单个 goroutine 中顺序进行执行的，一次一个包。<code>init</code>函数可以回生成其他的 goroutines，它们和初始化的代码是并发执行的。但是<code>init</code>函数的执行总是按顺序执行的: 一个<code>init</code>未执行完不会去执行另外一个init函数。</p>

<h2 id="Errors">错误</h2>

<p>
预声明的类型<code>error</code>定义如下：
</p>

<pre>
type error interface {
  Error() string
}
</pre>

<p>对于表示一个错误条件来说，这是个灰常方便的接口，如果没有错误的话就是 nil。比如说，一个从文件中读数据的函数可能是这样定义的：</p>

<pre>
func Read(f *File， b []byte) (n int， err error)
</pre>

<h2 id="Run_time_panics">运行时问题</h2>

<p>
在程序执行的过程中，如果出现访问数组越界这些错误就会触发一个<em>运行时问题</em>。不过也可以通过调用内置函数<a href="#Handling_panics"><code>panic</code></a>来实现，
这个函数带有一个实现定义的接口类型<code>runtime.Error</code>的值；这个值只要满足预声明的接口类型<a href="#Errors"><code>error</code></a>就好。
而实际的表示不同运行问题信息的值则不做具体指定。
</p>

<pre>
package runtime

type Error interface {
  error
  // and perhaps other methods
}
</pre>

<h2 id="System_considerations">系统考量</h2>

<h3 id="Package_unsafe"><code>unsafe</code>包</h3>

<p>内置的面向编译器的<code>unsafe</code>包，提供了更底层的一些功能和操作，不同的系统可能不一样。使用<code>unsafe</code>的地方要非常小心。unsafe包提供下面几个接口：</p>

<pre class="grammar">
package unsafe

type ArbitraryType int  // shorthand for an arbitrary Go type; it is not a real type
type Pointer *ArbitraryType

func Alignof(variable ArbitraryType) uintptr
func Offsetof(selector ArbitraryType) uintptr
func Sizeof(variable ArbitraryType) uintptr
</pre>

<p>
指针或是<a href="#Types">底层类型</a> <code>uintptr</code>的值可以和<code>Pointer</code>进行互相转换。</p>
<p>函数<code>Sizeof</code>会计算变量的字节数。</p>
<p>函数<code>Offsetof</code>计算(§<a href="#Selectors">选择子</a>)的某个结构体字段相对于结构体地址的偏移字节数。譬如针对结构体<code>s</code>的字段<code>f</code>：</p>

<pre>
uintptr(unsafe.Pointer(&amp;s)) + unsafe.Offsetof(s.f) == uintptr(unsafe.Pointer(&amp;s.f))
</pre>

<p>计算机体系结构要求内存寻址要进行<em>对齐</em>，也就是说某个变量的地址必须是某个<em>对齐</em>因子的倍数。函数<code>Alignof</code>会计算一个变量需要对齐的字节数。譬如对于变量<code>x</code>来说：</p>

<pre>
uintptr(unsafe.Pointer(&amp;x)) % unsafe.Alignof(x) == 0
</pre>

<p>
对<code>Alignof</code>， <code>Offsetof</code>和
<code>Sizeof</code>的计算结果都是编译期的<code>uintptr</code>类型的常量。
</p>

<h3 id="Size_and_alignment_guarantees">大小以及对齐保证</h3>
<p>
对于(§<a href="#Numeric_types">数值类型</a>)来说，下面的大小必须保证：
</p>

<pre class="grammar">
type                                 size in bytes

byte， uint8， int8                     1
uint16， int16                          2
uint32， int32， float32                4
uint64， int64， float64， complex64    8
complex128                             16
</pre>

<p>下面的最小对齐属性也必须保证：</p>
<ol>
<li>对于任意类型的变量<code>x</code> ：<code>unsafe.Alignof(x)</code>至少是 1。</li>
<li>对于结构类型的变量<code>x</code> ：<code>unsafe.Alignof(x)</code>是<code>x</code>中的所有字段<code>f</code>的<code>unsafe.Alignof(x.f)</code>的最大值，至少是 1 。</li>
<li>对于数组类型<code>x</code> ：<code>unsafe.Alignof(x)</code> 和<code>unsafe.Alignof(x[0])</code>是一样的， 至少是 1 。</li>
</ol>

<p>一个结构体或是数组类型，如果不含有尺寸大于0 的任何字段(或是说元素)，那么这种类型的大小是 0 。两个不同的 0 尺寸的变量可能在内存中会有相同的地址。</p>
</article>
