<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Fale Conosco</title>
  </head>
  <body>
    <?php
    session_start();
    if ($_SESSION['index_logar'])
    {
    echo '<header>
    <nav class="navbar navbar-expand-lg navbar-light w-100 d-flex justify-content-around align-items-center row mx-0 px-1">
        <div class="logo-box col-2 p-1">
            <a class="nav-link p-0" href="index.php">
                <img src="../images/logo.jpg" alt="logo" class="img-fluid" style="width:100px;">
            </a>
        </div>

        <div class="col-7 col-lg-5 p-1">
            <a class="logo-text nav-link text-info font-weight-bold px-lg-0" href="../index.php">
              Brain Games
            </a>
        </div>

        <button class="navbar-toggler mr-1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon top-menu-button"></span>
        </button>

        <div class="botoes-topo collapse navbar-collapse mx-3 mx-sm-5 mr-lg-2 mt-1 mt-sm-2 flex-column flex-md-row col-lg-4" id="navbarSupportedContent">
            <a href="../inicial/criar_conta.php" class="btn btn-danger btn-block my-1 mt-sm-2 mr-sm-3">Cadastre-se agora</a>
            <a href="../inicial/entrar.php" class="btn btn-light btn-block mt-sm-2 my-1">Entrar</a>
        </div>
    </nav>
    </header>';

    }
    if($_SESSION['usuario_logado'])
    {
      require('../include/nav.php');
    }

    ?>
    </div>

</div>

      <div class="bg-light pt-3">
  <div class="container">

  <section class='privacidade' id='privacy'>

  <p class=" font-weight-bold" style="font-size:30px">Política de Privacidade</p>

  <div class="row"><div class="span9"><div class="updated">Última modificação: 24 de maio de 2018</div>
<p>A Brain Games, Inc. ("Brain Games", "nós") reconhece que sua privacidade é importante para você e estamos comprometidos em fornecer uma experiência de usuário segura e protegida. Esta Política de Privacidade está incorporada aos Termos de Serviço da Brain Games e se aplica ao uso do (1) Brain Games on-line em <a href="inicio.php">Brain Games.com</a>, (2) Brain Games on-line em dispositivos móveis e (3) quaisquer outros serviços que incluam um link e/ou cópia desta Política de Privacidade na página inicial do site ou local semelhante (por exemplo, uma página de configurações) para quaisquer aplicativos móveis aplicáveis ​​(coletivamente, "Brain Games"), que são de propriedade e operados pela Brain Games. Descreve como coletamos, usamos, protegemos e compartilhamos informações de nossos usuários e indivíduos cujos detalhes de pagamento são usados ​​para comprar o Brain Games (coletivamente, "você" ou "seu"). Também descreve como acessar, atualizar e corrigir seus dados pessoais e as opções disponíveis para você em relação aos seus dados pessoais. Sob a lei aplicável, o Brain Games é o controlador de dados de seus dados pessoais. </p><p> Antes de usar ou enviar qualquer informação através de ou relacionada à Brain Games, por favor, leia atentamente esta Política de Privacidade. Ao usar qualquer parte da Brain Games, você concorda com a coleta, uso e divulgação de suas informações, conforme descrito nesta Política de Privacidade..</p>
<ol>
<li class="toc"><a href="#que-informacoes-coletamos">Que informações coletamos</a></li>
<ol class="secondary">
<li class="toc"><a href="#informacao-que-voce-devera-fornecer">Informação que você deverá fornecer</a></li>
<li class="toc"><a href="#informacao-coletada-automaticamente">Informação coletada automaticamente</a></li>
<ol class="tertiary">
<li class="toc"><a href="#informacoes-do-dispositivo-uso">Informações do dispositivo/ uso</a></li>
<li class="toc"><a href="#cookies-e-outras-tecnologias-de-rastreamento">Cookies e outras tecnologias de rastreamento</a></li>
</ol>
<li class="toc"><a href="#informacao-fornecida-por-servicos-de-redes-sociais-e-outros">Informação fornecida por Serviços de Redes Sociais e Outros</a></li>
</ol>
<li class="toc"><a href="#como-usamos-suas-informacoes-no-lumos-labs">Como usamos suas informações no Lumos Labs</a></li>
<li class="toc"><a href="#base-legal-para-o-uso-de-seus-dados-pessoais">Base Legal para o uso de seus dados pessoais</a></li>
<li class="toc"><a href="#nenhuma-informacao-sera-divulgada-para-as-finalidades-de-marketing-de-terceiros">Nenhuma informação será divulgada para as finalidades de marketing de terceiros</a></li>
<li class="toc"><a href="#quando-nos-compartilhamos-suas-informacoes-pessoais-com-terceiros">Quando Nós Compartilhamos Suas Informações Pessoais Com Terceiros</a></li>
<li class="toc"><a href="#analise-online-e-publicidade-personalizada">Análise Online e Publicidade Personalizada </a></li>
<li class="toc"><a href="#direitos-sobre-dados-pessoais-e-suas-opcoes">Direitos sobre dados pessoais e suas opções</a></li>
<li class="toc"><a href="#retencao-de-dados-pessoais-e-seguranca">Retenção de dados pessoais e segurança</a></li>
<li class="toc"><a href="#permissao-para-processar-e-transferir-informacao-fora-dos-estados-unidos">Permissão para processar e transferir informação fora dos Estados Unidos</a></li>
<li class="toc"><a href="#informacoes-adicionais">Informações adicionais</a></li>
<ol class="secondary">
<li class="toc"><a href="#links-para-sites-de-terceiros">Links para sites de terceiros</a></li>
<li class="toc"><a href="#social-media-widgets">Social Media Widgets</a></li>
</ol>
<li class="toc"><a href="#protecao-a-privacidade-u-e-u-s-a-e-protecao-a-privacidade-suica-u-s-a">Proteção à Privacidade U.E.-U.S.A. e Proteção à Privacidade Suíca-U.S.A</a></li>
<li class="toc"><a href="#menores">Menores</a></li>
<li class="toc"><a href="#aviso-nao-rastreie-california">Aviso "Não rastreie" - California </a></li>
<li class="toc"><a href="#mudanca-na-politica">Mudança na Política</a></li>
<li class="toc"><a href="#informacoes-de-contato">Informações de contato</a></li>
</ol>
<ol>
<section id="que-informacoes-coletamos" class="section"><li class="header">Que informações coletamos</li>
</section><ol class="secondary" start="1">
<section id="informacao-que-voce-devera-fornecer" class="section"><li class="header">Informação que você deverá fornecer</li>
</section><p>Pode ser preciso coletar informações suas de diversas maneiras, como quando você:</p>
<p></p><ul> <li>Registrar-se para uma conta Brain Games (“Conta”);</li> <li>Solicitar alguns recursos (ex.: boletins informativos);</li> <li>Completar uma pesquisa ou nos enviar um feedback;</li> <li>Participar de games de treinamento cognitivo ou de outras atividades que requerem suas informações (ex.: áreas do Brain Games que requerem uma conta para participar);</li> <li>Candidatar-se para trabalhar conosco;</li> <li>Fale conosco; ou</li> <li>Publicar conteúdo como usuário no Brain Games.</li> </ul><p></p>
<p>Você não precisa criar uma Conta para ter acesso a algumas áreas do Brain Games. Se deseja criar uma Conta, solicitamos algumas informações para realizar a sua inscrição, como endereço de e-mail e senha. Caso se inscreva em uma Conta paga, solicitamos informações adicionais, como seu nome completo e detalhes da forma de pagamento.</p>
<p>Também podemos coletar dados como  (1) nome, (2) sexo, (3) data de nascimento, (4) nível de instrução, (5) outros dados demográficos, e (6) outras informações que queira nos fornecer. É opcional nos fornecer a maior parte destas informações. Além disso, você pode escolher suas preferências de treinamento, idioma e se deseja receber informações por e-mail.</p>
</ol>
<ol class="secondary" start="2">
<section id="informacao-coletada-automaticamente" class="section"><li class="header">Informação coletada automaticamente</li>
</section><p>Além das informações que você nos fornece, ao usar o Brain Games serão coletadas automaticamente informações sobre seu computador, dispositivo móvel ou outros dispositivos usados para acessar o Brain Games, bem como o modo como utiliza o Brain Games. Por exemplo, recebemos dados sobre os games que você joga e o seu desempenho nos mesmos. Também recebemos informações como seu tipo de navegador, endereço de IP, idioma, tipo de dispositivo usado, sua versão de sistema operacional, identificador único universal ("UDID"), data e horário de sua visita e arquivos visualizados em nosso website (por exemplo, páginas HTML, gráficos, etc), serviço de provedor de internet, seu fluxo de cliques, páginas visualizadas e sites visitados imediatamente antes e depois de acessar o Brain Games. Em alguns casos, conectamos estes dados coletados automaticamente a outras informações que coletamos sobre você. Fazemos isso para melhorar os serviços e o marketing que oferecemos.</p>
<ol class="tertiary" start="1">
<section id="informacoes-do-dispositivo-uso" class="section"><li class="header">Informações do dispositivo/ uso</li>
</section><p>É possível que o Brain Games colete automaticamente informações sobre seu computador ou dispositivo móvel (celular ou tablet) usados para acessar o Lumosity. Como descrito a seguir, podemos coletar e analisar informações como (a) endereço de IP, geolocalização (baseada no seu endereço de IP), identificadores exclusivos de dispositivo, IMEI e endereço TCP/IP, e qualquer outra informação sobre seu computador ou dispositivo móvel, tipo de navegador, sistema operacional, informação sobre a operadora de dispositivo usada, e cidade ou país de onde acessou o Brain Games; e (b) informações sobre como interage com o Brain Games, como consultar e sair de páginas da Web e URLs, tipo de plataforma, número de cliques, nomes de domínio, páginas de destino, páginas e conteúdo visualizados e em que ordem essas páginas  foram visitadas, estatísticas sobre o uso do Lumosity, tempo gasto em páginas específicas, a data e a hora em que você usou o Lumosity, a frequência de uso do Brain Games, registros de erros e outras informações semelhantes. Conforme descrito abaixo, podemos usar análise de dados e tecnologias de terceiros, incluindo cookies e ferramentas similares, para auxiliar na coleta dessas informações.</p>
</ol>
<ol class="tertiary" start="2">
<section id="cookies-e-outras-tecnologias-de-rastreamento" class="section"><li class="header">Cookies e outras tecnologias de rastreamento</li>
</section><p>Como muitas outras empresas, nós e terceiros com os quais trabalhamos usamos cookies e outras tecnologias de rastreamento na web e em dispositivos móveis, como HTML5, web beacons, scripts, pixels, registros do servidor e tags. Usamos essas tecnologias para autenticação, para armazenar suas preferências ou progresso, para análise de dados e para publicidade do Lumosity. Um log do servidor web é um arquivo no qual a atividade do site é armazenada. Um cookie é um pequeno arquivo de texto que é colocado em seu computador quando você visita um site, o que nos permite: (i) reconhecer seu computador; (ii) armazenar suas preferências e configurações; (iii) saber quais as páginas do Brain Games que você visitou; (iv), melhorar a sua experiência de usuário, fornecendo conteúdo específico de acordo com os seus interesses; (v) realizar buscas e análises; e (vi) auxiliar em funções administrativas de segurança. Alguns cookies são colocados no cache do seu navegador, enquanto aqueles associados às tecnologias Flash são armazenados com seus arquivos do Adobe Flash Player. Os pixels de rastreamento (às vezes chamados de web beacons ou GIFs transparentes) são minúsculas tags eletrônicas com um identificador exclusivo incorporado em websites, anúncios on-line e/ou e-mail, e que são projetados para fornecer informações de uso, como impressões de anúncios ou cliques, medir a popularidade do Brain Games e publicidade associada e para acessar os cookies do usuário. À medida que adotamos tecnologias adicionais, também podemos coletar mais informações por meio de outros métodos.</p>
<p>Note que você pode alterar suas configurações a fim de notificá-lo quando um cookie está sendo definido ou atualizado, ou para bloquear completamente os cookies. Consulte a seção "Ajuda" do seu navegador para mais informações (por exemplo,<a href="http://windows.microsoft.com/en-US/windows-vista/Block-or-allow-cookies">Internet Explorer</a>;<a href="https://support.google.com/chrome/answer/95647?hl=en">Google Chrome</a>;<a href="http://kb.mozillazine.org/Cookies#Firefox">Mozilla Firefox</a>; ou<a href="http://support.apple.com/kb/PH5042">Apple Safari</a>). Você também pode gerenciar o uso de ferramentas Flash, incluindo cookies e objetos de armazenamento local com as ferramentas de gerenciamento do Flash disponíveis em<a href="http://www.macromedia.com/support/documentation/en/flashplayer/help/settings_manager02.html">Site da Adobe</a>. Observe que bloqueando qualquer um ou todos os cookies, você pode não ter acesso a certos recursos ou ofertas do Brain Games.</p>
</ol>
</ol>
<ol class="secondary" start="3">
<section id="informacao-fornecida-por-servicos-de-redes-sociais-e-outros" class="section"><li class="header">Informação fornecida por Serviços de Redes Sociais e Outros</li>
</section><p>Podemos complementar as informações que você nos fornece com informações adicionais coletadas de outras fontes, como informações disponíveis publicamente, ou de terceiros, como profissionais de marketing, parceiros, pesquisadores e outros. Podemos reunir as suas informações, as quais coletamos, com outras informações obtidas a partir de terceiros e informações derivadas de qualquer outro produto ou serviço que fornecemos.</p>
<p>Se você entrar no Brain Games usando seu Facebook ou outras credenciais de terceiros, usaremos esse serviço para autenticá-lo. Também podemos receber outras informações que você autorizou serem fornecidas por estes terceiros, como seu nome de usuário, nome, endereço de e-mail, foto, local, data de nascimento, sexo, um ID associado à plataforma de terceiros aplicável, arquivos de usuários, como fotos e vídeos, sua lista de amigos, pessoas que você segue e/ou que seguem você, e/ou suas publicações ou "curtidas". Recebemos essas informações para que possam ser usadas para os fins explicados nesta Política de Privacidade. Se você não deseja que essas informações sejam compartilhadas por esses terceiros, não use o Facebook ou outros terceiros para acessar o Brain Games. Também podemos coletar outras informações por meio de outras redes sociais que você disponibilizar. Para obter uma descrição de como as redes sociais e outros sites de terceiros gerenciam e compartilham suas informações, consulte as políticas de privacidade e os termos de uso dos mesmos, os quais podem permitir que você modifique suas configurações de privacidade. Podemos reunir informações que coletamos de você ou sobre você com informações sobre você obtidas de tais mídias sociais e outras plataformas de conteúdo e informações derivadas de qualquer outra assinatura, produto ou serviço que fornecemos.</p>
<p>Se você participa de um projeto de pesquisa ou estudo desenvolvido pelo Brain Games em parceria com um pesquisador ou instituição de ensino, aquele projeto pode envolver a coleta de informações diferentes das que estão descritas nesta seção. Pesquisadores podem, por exemplo, fornecer informações relacionadas à saúde, incluindo a existência de certas condições específicas de saúde. O Brain Games faz parcerias com pesquisadores e instituições de ensino na condução destes estudos. Tais projetos de pesquisa são tipicamente realizados anonimamente, de forma que o Brain Games atua apenas como um processador de dados anônimos ou pseudo-anônimos. Para obter mais informações sobre como lidamos com dados associados a essa pesquisa, consulte os materiais distribuídos a você como parte do estudo, entre em contato com o pesquisador que conduz seu estudo ou entre em contato conosco usando as informações de contato abaixo.</p>
</ol>
<section id="como-usamos-suas-informacoes-no-lumos-labs" class="section"><li class="header">Como usamos suas informações no Brain Games</li>
</section><p>Usamos suas informações para gerenciar e fornecer os serviços do Brain Games e outros. Isso inclui, mas não está limitado a:</p>
<p></p><ol><li>Para as finalidades para as quais você forneceu;</li><li> Autenticar seu login e processar seus pagamentos;</li><li>Personalizar sua experiência Brain Games e  seu programa de treinamento; </li><li>Permitir que você monitore seu desempenho e progresso no Brain Gamesy, por exemplo, apresentando tabelas e gráficos de seu desempenho; </li><li>Personalizar e fornecer informações sobre nossos produtos e serviços por email; </li><li> Para enviá-lo informações, pesquisas ou anúncios que acreditamos ser de seu interesse em relação a nós ou a Brain Games;</li><li>Para administrar concursos e pesquisas;</li><li>Fornecer suporte ao cliente e enviar confirmações sobre sua conta; </li><li>Para pesquisa interna e envio de relatórios; </li><li>Proteger nossa propriedade intelectual ou outros direitos; e </li><li>Gerenciar e melhorar nossos serviços, nossos jogos e nossa formação.</li></ol><p></p>
<p>Também nos reservamos o direito de usar informações não pessoais (por exemplo, dados anonimizados ou agregados) para qualquer propósito. Por exemplo, mostramos métricas de desempenho agregadas aos usuários para permitir que eles avaliem seus desempenhos em relação a outros usuários do Brain Games. Além disso, em relação ao nosso Projeto Cognição Humana, podemos revelar estatísticas de desempenho a colaboradores de universidades a fim de avaliar, estudar e aperfeiçoar a eficácia dos nossos programas ou da cognição humana de maneira mais geral. Nesses casos, todos os dados são revelados de forma agregada ou sem qualquer informação que possa identificá-lo. Além disso, quando trabalhamos com colaboradores de universidades, proibimos contratualmente os mesmos de tentar reidentificar indivíduos a partir dos dados que foram anonimizados.</p>
<section id="base-legal-para-o-uso-de-seus-dados-pessoais" class="section"><li class="header">Base Legal para o uso de seus dados pessoais</li>
</section><p>As leis de algumas jurisdições exigem que as empresas informem sobre que bases legais usam ou divulgam dados pessoais dos usuários. Na forma em que essas leis se aplicam, nossos fundamentos legais são os seguintes:</p>
<p></p><ul> <li>Para honrar nossos compromissos contratuais com você: Grande parte do nosso processamento de dados pessoais é para cumprir nossas obrigações contratuais com os usuários, ou para tomar medidas antecipando-se quando solicitado pelos usuários antes de envolver-se em um acordo legal com eles. Por exemplo, lidamos com dados pessoais nessa base para nossos usuários premium.</li> <li>Consentimento: Quando exigido por lei, e em alguns outros casos, lidamos com dados pessoais com base em seu consentimento implícito ou expresso. Ainda que você tenha fornecido o seu consentimento, poderá retirá-lo a qualquer momento, sem afetar a legalidade do processamento que foi realizado antes de retirá-lo. Para retirar seu consentimento, entre em contato conosco.</li> <li>Interesses legítimos: Em muitos casos, lidamos com dados pessoais com base no fato de que isso promove nossos interesses legítimos de maneira que não são anulados pelos interesses ou direitos e liberdades fundamentais dos indivíduos afetados, tais como: <ul> <li>Proporcionar uma experiência de usuário segura e agradável;</li> <li>Serviço ao cliente;</li> <li>Marketing;</li> <li>Proteger nossos usuários, nosso pessoal e nossa propriedade;</li> <li>Analisar e melhorar  nossos negócios;</li> <li>Processar pedidos de emprego; e</li> <li>Gerenciar questões legais. .</li> <li>Também podemos processar dados pessoais para os interesses legítimos de nossos parceiros de pesquisa, como fornecer treinamento, pesquisa e análise cognitiva para esses parceiros.</li> </ul> </li> <li>Conformidade legal: precisamos usar e divulgar dados pessoais de forma que cumpramos com nossas obrigações legais.</li> <li>Para proteger os interesses vitais do indivíduo ou de outras pessoas: Por exemplo, podemos coletar ou compartilhar dados pessoais para ajudar a resolver uma situação de segurança urgente.</li> </ul><p></p>
<section id="nenhuma-informacao-sera-divulgada-para-as-finalidades-de-marketing-de-terceiros" class="section"><li class="header">Nenhuma informação será divulgada para as finalidades de marketing de terceiros</li>
</section><p>Acreditamos na proteção à sua privaciade e, portanto, não fornecemos suas informações pessoais a terceiros para fins de marketing deles.</p>
<section id="quando-nos-compartilhamos-suas-informacoes-pessoais-com-terceiros" class="section"><li class="header">Quando Nós Compartilhamos Suas Informações Pessoais Com Terceiros</li>
</section><p>Só podemos compartilhar suas informações pessoais das seguintes maneiras:</p>
<ol class="secondary" start="1">
<section id="prestadores-de-servicos-e-agentes" class="section"><li class="header">Prestadores de serviços e agentes</li>
</section><p>Podemos compartilhar suas informações com certos terceiros selecionados por nós para nos ajudar a dar suporte às nossas operações.  Isso inclui, por exemplo, serviços que nos ajudam a processar pagamentos, analisar tráfego da web, enviar e-mails e acompanhar solicitações de atendimento ao cliente. Além disso, podemos compartilhar informações pessoais limitadas com terceiros para obter ajuda ao comercializar ou ao fazer a publicidade da Brain Games. Esses terceiros podem ter acesso às suas informações somente com o propósito de realizar essas tarefas em nosso nome, e nós exigimos contratualmente que eles protejam suas informações de maneira consistente com esta Política de Privacidade.</p>
</ol>
<ol class="secondary" start="2">
<section id="afiliadas" class="section"><li class="header">Afiliadas</li>
</section><p>Podemos compartilhar suas informações com nossas afiliadas corporativas, como entidades controladas ou com proprietários em comum.</p>
</ol>
<ol class="secondary" start="3">
<section id="transferencias-comerciais" class="section"><li class="header"> Transferências comerciais</li>
</section><p>Podemos vender, transferir ou de alguma forma compartilhar alguns ou todos os nossos ativos em caso de fusão, reorganização, transação comercial ou falência. Em tais cenários, suas informações podem fazer parte dos ativos transferidos. Publicaremos um aviso ou notificaremos você de alguma forma e coletaremos seu consentimento, conforme exigido por lei, antes que as informações sejam transferidas e fiquem sujeitas a uma política de privacidade diferente.</p>
</ol>
<ol class="secondary" start="4">
<section id="conformidade-com-leis-e-solicitacoes-de-autoridades-e-protecao-de-nossos-direitos" class="section"><li class="header">Conformidade com leis e solicitações de autoridades e proteção de nossos direitos.</li>
</section><p>Podemos divulgar suas informações se acreditarmos, de boa fé, que sejamos obrigados a isso por lei, ou em resposta a intimações, ordens judiciais ou outros mecanismos legais. Também podemos divulgar suas informações se acreditarmos, de boa fé, que tal divulgação possa impedir fraudes e abusos em relação à Brain Games ou seus usuários, ou para proteger nossos direitos de propriedade.</p>
</ol>
<ol class="secondary" start="5">
<section id="consentimento" class="section"><li class="header">Consentimento</li>
</section><p>Podemos divulgar suas informações se acreditarmos que temos seu consentimento para isso, como quando você contata o atendimento ao cliente e nos pergunta sobre sua conta ou quando temos o consentimento de alguém que acreditamos estar autorizado para dar tal consentimento em seu nome, como um indivíduo associado à forma de pagamento da sua conta. Se você tiver expressamente concordado em participar de algum estudo de pesquisa conosco ou com algum terceiro que incorpore suas informações pessoais coletadas pela Brain Games, também poderemos divulgar suas informações com o propósito de facilitar a pesquisa com a qual você tiver consentido.</p>
</ol>
<section id="analise-online-e-publicidade-personalizada" class="section"><li class="header">Análise Online e Publicidade Personalizada </li>
</section><p>Podemos usar serviços de análise da web de terceiros no Brain Games, como os do Google Analytics, Rollbar e New Relic. Esses provedores de serviços usam o tipo de tecnologia descrito anteriormente na seção "Cookies e outras tecnologias eletrônicas" para nos ajudar a analisar como os usuários usam o Lumosity, inclusive observando o site de terceiros a partir do qual você chega, com que frequência você usa nosso aplicativo, eventos que ocorrem em nosso aplicativo, de onde o aplicativo foi baixado, e fornecer determinados recursos a você. As informações (incluindo seu endereço de IP) coletadas pela tecnologia serão divulgadas ou coletadas diretamente por esses provedores de serviços, que usam as informações para avaliar seu uso do Lumosity. Para evitar que o Google Analytics use suas informações para análise, você pode instalar o complemento do navegador para desativação do Google Analytics clicando em <a href="http://tools.google.com/dlpage/gaoptout">aqui</a>.</p>
<p>Se você receber um e-mail nosso, poderemos usar certas ferramentas, como GIFs transparentes, para capturar dados, como quando você abre nossa mensagem ou clica em algum link ou banner contido em nosso e-mail. Esses dados nos permitem avaliar a eficácia de nossas comunicações.</p>
<p>Podemos personalizar o conteúdo e a publicidade que você vê ao usar o Brain Games através do uso de tecnologias de publicidade de terceiros que permitem a entrega de conteúdo relevante e publicidade em nossos sites, bem como outros sites que você visita e outros aplicativos que você usa. Os anúncios podem ser baseados em vários fatores, como o conteúdo da página que você está visitando, informações fornecidas por você, como sua idade e sexo, suas pesquisas, dados demográficos, conteúdo gerado pelo usuário e outras informações que coletamos de você. Esses anúncios podem se basear em sua atividade atual ou em sua atividade ao longo do tempo e podem ser adaptados aos seus interesses.</p>
<p>Além disso, terceiros cujos produtos ou serviços são acessíveis ou anunciados via Brain Games também podem colocar cookies ou outras tecnologias de rastreamento em seu computador, telefone celular ou outro dispositivo para coletar informações sobre seu uso do Brain Games para (i) informar, otimizar e veicular anúncios com base em visitas anteriores a nossos websites e outros sites e (ii) informar como nossas impressões de anúncios, outros usos de serviços de anúncios e interações com essas impressões de anúncios e serviços de anúncios estão relacionados a visitas a nossos websites e uso do Brain Games. Também podemos permitir que outros terceiros (por exemplo, redes de anúncios e servidores de anúncios, como Google Analytics, DoubleClick e outros) veiculem anúncios personalizados para você no Lumosity, em outros sites e em outros aplicativos e acessem seus próprios cookies ou outras tecnologias de rastreamento em seu computador, telefone celular ou outro dispositivo que você usa para acessar o Brain Games. Também podemos compartilhar com anunciantes terceirizados uma versão com hash do seu endereço de e-mail, somente em formato não legível para fins de veiculação de publicidade personalizada. Nós não temos acesso a, nem esta Política de Privacidade rege, o uso de cookies ou outras tecnologias de rastreamento que podem ser colocadas em seu computador, telefone celular ou outro dispositivo usado para acessar o Brain Games por tecnologia de anúncios de terceiros não afiliados, servidores de anúncios, redes de anúncios ou quaisquer outros terceiros não afiliados. As partes que usam essas tecnologias podem oferecer a você uma maneira de desativar a segmentação de anúncios, conforme descrito abaixo. Se estiver interessado em mais informações sobre publicidade personalizada para navegadores e como geralmente pode controlar a colocação de cookies no seu computador para fornecer publicidade personalizada, acesse <a href="http://www.networkadvertising.org/choices">Link de desativação de consumidor da Network Advertising Initiative</a> ou <a href="http://www.aboutads.info/choices/">Link de desativação de consumidor da Digital Advertising Alliance</a> para parar de receber publicidade de empresas que participam desses programas.</p>
<p>Para desativar o Google Analytics para publicidade gráfica ou personalizar anúncios da Rede de Display do Google, você pode visitar o <a href="https://www.google.com/settings/ads">Confirguração do Google Ads </a>. Observe que, na medida em que a tecnologia de publicidade é integrada ao Brain Games, você ainda pode receber anúncios, mesmo se você optar por não receber publicidade personalizada. Nesse caso, os anúncios não serão adaptados. Além disso, não controlamos nenhum dos links de desativação acima e não somos responsáveis por qualquer escolha que você faça usando esses mecanismos ou pela disponibilidade ou precisão contínuas desses mecanismos.</p>
<section id="direitos-sobre-dados-pessoais-e-suas-opcoes" class="section"><li class="header">Direitos sobre dados pessoais e suas opções</li>
</section><p>Você pode acessar, revisar e corrigir certos dados pessoais fazendo login na sua conta. Você também pode exercer certos direitos de desativação seguindo as instruções no final da seção "Análise Online e Publicidade Personalizada" acima.</p>
<p>Além disso, os indivíduos na União Europeia e algumas outras jurisdições fora dos Estados Unidos têm certos direitos legais para obter confirmação de que possuímos dados pessoais sobre eles, para acessar dados pessoais que possuímos sobre eles (inclusive, em alguns casos, em formato portátil) e obter a sua correção, atualização, alteração ou eliminação em circunstâncias adequadas. Eles também podem se opor aos nossos usos ou divulgações de dados pessoais ou exercer direitos legais para retirar o consentimento, embora tais ações normalmente não tenham efeito retroativo. Para exercer qualquer um dos direitos acima (ou quaisquer outros direitos sob a lei aplicável), entre em contato conosco através do nosso central de ajuda.</p>
<p>Os direitos aqui descritos estão sujeitos a limitações e exceções sob a lei aplicável. Em situações em que processamos dados pessoais em nome de nossos parceiros de pesquisa, podemos encaminhar a solicitação ao parceiro de pesquisa relevante e cooperar com o tratamento da solicitação, sujeito a qualquer acordo contratual especial com esse parceiro de pesquisa.</p>
<p>Além dos direitos acima, os residentes do Espaço Econômico Europeu também têm o direito de apresentar uma reclamação junto da sua autoridade de supervisão relevante. No entanto, recomendamos que você entre em contato primeiro e faremos o melhor possível para resolver sua preocupação.</p>
<p>Você pode optar por não receber nossos e-mails de marketing, navegando até a página de Notificações por e-mail ou seguindo as instruções de cancelamento de inscrição incluídas em todos os e-mails. Observe que você não pode optar por não receber certos e-mails de transações como, por exemplo, os e-mails de confirmação de transação, problemas com o endereço da sua conta ou comunicação com nosso time de atendimento ao cliente.</p>
<p>De tempos em tempos, usamos notificações por push nos aplicativos móveis para enviar mensagens sobre a Brain Games ou sobre a sua conta. Nas configurações do dispositivo, você pode excluir o recebimento de notificações por push. </p>
<section id="retencao-de-dados-pessoais-e-seguranca" class="section"><li class="header">Retenção de dados pessoais e segurança</li>
</section><p>Mantemos suas informações por não mais do que o necessário para as finalidades para as quais elas são processadas. O período de tempo durante o qual retemos informações depende das finalidades para as quais coletamos e usamos e/ou, conforme necessário, para cumprir as leis aplicáveis. Para descartar dados pessoais, podemos torná-los anônimos, excluí-los ou tomar outras medidas apropriadas. Os dados podem persistir em cópias feitas para fins de backup e continuidade de negócios por mais tempo.</p>
<p>Implementamos e mantemos práticas de segurança para proteger contra o acesso não autorizado, uso, modificação, destruição ou divulgação de seus dados pessoais. Por exemplo, quando você insere informações confidenciais em nossos formulários de pedidos, criptografamos a transmissão dessas informações usando a tecnologia Secure Socket Layer (SSL). Seguimos padrões geralmente aceitos para proteger os dados pessoais que nos são enviados, tanto durante a transmissão quanto depois de recebê-los. No entanto, nenhum método de transmissão ou armazenamento é completamente seguro e, portanto, não podemos garantir segurança absoluta. Se você tiver alguma dúvida sobre segurança em nosso site, entre em contato conosco usando as informações de contato abaixo.</p>
<section id="permissao-para-processar-e-transferir-informacao-fora-dos-estados-unidos" class="section"><li class="header">Permissão para processar e transferir informação fora dos Estados Unidos</li>
</section><p>Se você acessar o Brain Games fora dos Estados Unidos, você compreende e concorda de forma inequívoca com a transferência de seus dados pessoais para a coleta e processamento de tais dados pessoais nos Estados Unidos. Os destinatários das divulgações de dados pessoais descritos na seção "Quando compartilhamos suas informações pessoais com terceiros" podem estar localizados nos Estados Unidos ou em qualquer outro lugar do mundo. As leis de privacidade nesses países podem não oferecer proteções equivalentes às do seu país de residência, e seu governo pode ou não considerar essas proteções adequadas.</p>
<section id="informacoes-adicionais" class="section"><li class="header">Informações adicionais</li>
</section><ol class="secondary" start="1">
<section id="links-para-sites-de-terceiros" class="section"><li class="header">Links para sites de terceiros</li>
</section><p>Nosso site inclui links para outros sites que podem coletar informações pessoais e cujas práticas de privacidade podem ser diferentes das adotadas na Lumos Labs. Observe que não somos responsáveis pelas práticas de privacidade desses sites. Incentivamos você a examinar as políticas de privacidade desses sites.</p>
</ol>
<ol class="secondary" start="2">
<section id="blog" class="section"><li class="header">Blog</li>
</section><p>Nosso site oferece blogs publicamente acessíveis. Algumas postagens do blog permitem que comentários sejam feitos pelo Facebook. Talvez você precise fazer login ou entrar em contato com o Facebook para postar comentários e para excluir informações pessoais postadas anteriormente nos comentários. Você pode consultar a política de privacidade do Facebook neste link: <a href="https://www.facebook.com/policy.php">https://www.facebook.com/policy.php</a>.</p>
</ol>
<ol class="secondary" start="3">
<section id="indicacoes-e-contatos" class="section"><li class="header">Indicações e Contatos</li>
</section><p>Permitimos que você indique o Brain Games a amigos e contatos, inserindo manualmente seus endereços de e-mail ou importando contatos de contas de e-mail que tenha com terceiros. Se optar por utilizar esses recursos, os amigos ou contatos que você indicou podem entrar em contato conosco, através das informações de contato listadas abaixo, solicitando que suas informações pessoais sejam excluídas por nós. Observe que nós não coletamos o nome de usuário e a senha de suas contas de e-mail; os recursos de importação direcionam você para o provedor de e-mail de terceiros para que você faça o login por meio dos serviços deles.</p>
</ol>
<ol class="secondary" start="4">
<section id="social-media-widgets" class="section"><li class="header">Social Media Widgets</li>
</section><p>Nosso site pode incluir recursos de mídia social, como botões do Facebook e do Twitter. Esses recursos podem coletar seu endereço de IP e informações sobre a página que você está visitando e podem configurar cookies para funcionar corretamente. Suas interações com esses recursos são regidas pelas políticas de privacidade da empresa que os fornece.</p>
</ol>
<section id="protecao-a-privacidade-u-e-u-s-a-e-protecao-a-privacidade-suica-u-s-a" class="section"><li class="header">Proteção à Privacidade U.E.-U.S.A. e Proteção à Privacidade Suíca-U.S.A</li>
</section><p>A Brain Games participa e certifica sua conformidade com o Privacy Shield Framework para a União Europeia e Estados Unidos e com o Privacy Shield Framework para a Suíça e Estados Unidos. A Brain Games está empenhada em submeter todos os dados pessoais recebidos da Suíça e dos países participantes da União Europeia (UE) na dependência do Privacy Shield Framework e dos princípios de Framework aplicáveis. Para saber mais sobre Privacy Shield Framework, visite a lista Privacy Shield do Departamento de Comércio dos Estados Unidos (US Department of Commerce). <a href="https://www.privacyshield.gov/list">https://www.privacyshield.gov/list</a></p>
<p>A Brain Games é responsável pelo processamento dos dados pessoais que recebe no âmbito do Privacy Shield Framework. Quando a Brain Games recebe informações no âmbito da Privacy Shield e as transfere para um prestador de serviço terceirizado atuando como um agente em nome da Brain Games, a Brain Games tem certa responsabilidade sob a Privacy Shield se ambos (a) o agente processa as informações de maneira inconsistente com a Privacy Shield e (b) a Brain Games é responsável pelo evento que deu origem ao dano. A Brain Games está em conformidade com os Princípios da Privacy Shield para todas as transferências subsequentes de dados pessoais da UE e da Suíça, incluindo as disposições de responsabilidade de transferência subsequentes.</p>
<p>No que diz respeito aos dados pessoais recebidos ou transferidos de acordo com Privacy Shield Framework, Brain Games está sujeita aos poderes de aplicação da regulamentação da US Federal Trade Commission (Comissão Federal de Comércio dos Estados Unidos). Em determinadas situações, Brain Games pode ser obrigada a revelar dados pessoais em resposta a solicitações legais pelas autoridades públicas, inclusive para atender a requisitos da segurança nacional ou para a aplicação da lei.</p>
<p>Fale conosco usando as informações de contato abaixo se tiver questões de privacidade não resolvidas ou preocupações sobre o uso de dados. Após isso, se considerar que nossa abordagem não foi satisfatória, entre em contato com o nosso provedor de resolução de disputas, com sede nos EUA, (sem custo) em <a href="https://www.jamsadr.com/eu-us-privacy-shield">https://www.jamsadr.com/eu-us-privacy-shield</a>.</p>
<p>Sob certas condições, descritas mais detalhadamente no site da Privacy Shield <a href="https://www.privacyshield.gov/article?id=How-to-Submit-a-Complaint">https://www.privacyshield.gov/article?id=How-to-Submit-a-Complaint</a>, você pode invocar a arbitragem quando outros procedimentos de resolução de disputas forem esgotados. Antes de iniciar a arbitragem, você deve: (1) entrar em contato com a Lumos Labs e nos dar a oportunidade de resolver o problema; (2) procurar assistência do mecanismo de recurso independente designado pela Brain Games acima; e (3) entrar em contato com o Departamento de Comércio dos EUA (diretamente ou por meio de uma Autoridade Europeia para Proteção de Dados) e conceder ao Departamento de Comércio tempo para tentar resolver o problema. Cada parte será responsável pelos honorários do seu próprio advogado. Informamos que, de acordo com a Privacy Shield, os árbitros podem impor somente um alívio equitativo individual, não monetário e necessário para remediar qualquer violação dos Princípios da Privacy Shield com relação ao indivíduo.</p>
<section id="menores" class="section"><li class="header">Menores</li>
</section><p>O Brain Games não é direcionado a indivíduos menores de 13 anos. Conforme apropriado de acordo com a lei aplicável, os pais ou responsáveis legais com perguntas ou solicitações sobre os dados pessoais de seus filhos podem entrar em contato conosco conforme descrito abaixo.</p>
<section id="aviso-nao-rastreie-california" class="section"><li class="header">Aviso "Não rastreie" - California </li>
</section><p>Nós não rastreamos as informações pessoais de nossos clientes ao longo do tempo e em sites de terceiros para fornecer publicidade segmentada e, portanto, não respondemos a sinais de não restrar (DNT - "Do Not Track").</p>
<section id="mudanca-na-politica" class="section"><li class="header">Mudança na Política</li>
</section><p>Esta Política de Privacidade pode ser atualizada de tempos em tempos. Se fizermos alterações substanciais, avisaremos a você por e-mail, por publicação de um aviso na Brain Games ou pela publicação de uma política de privacidade atualizada na Brain Games 45 dias antes da data de vigor dos Termos de Serviço atualizados. Observe que, para usuários existentes, salvo indicação em contrário pela lei vigente, seu contínuo uso da Brain Games após a data de vigor indica que você concorda e consente em sujeitar-se aos Termos de Serviço atualizados.</p>
<section id="informacoes-de-contato" class="section"><li class="header">Informações de contato</li>
</section><p>Nós aceitamos solicitações ou comentários sobre nossa Política de Privacidade por meio de nossa central de ajuda.
</ol>
</div></div>

            <?php require('../include/variaveis_php_echo.php'); echo $html_footer; ?>
<div class='pixels'>
<script>
//<![CDATA[

Eventd = (typeof(Eventd) === 'object') ? Eventd : {};
Eventd.disabled = true;
Eventd.clientName = '';
Eventd.controllerName = "terms";
Eventd.controllerAction = "show";
var _leq = _leq || [];
_leq.push(['page_view']);

//]]>
</script>

</div>
</div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
