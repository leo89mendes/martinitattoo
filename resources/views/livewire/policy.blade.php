<div class="text-white mx-6">
  <!-- Header Section -->
  <header class="pt-6 w-full">
    <div class="w-full flex justify-center">
        <a href="{{ url('/') }}"><img class="rounded-[25px] bg-center max-h-[150px]" src="{{ asset('storage/' . $setting[0]->logo) }}" alt=""></a>
    </div>
    <div class="container mx-auto px-4">
      <h1 class="text-3xl font-bold">Política de Privacidade</h1>
    </div>
  </header>

  <!-- Content Section -->
  <main class="container mx-auto px-4 py-10">
    <!-- Introduction -->
    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4">1. Introdução</h2>
      <p class="leading-relaxed">
        Bem-vindo ao nosso site institucional. A sua privacidade é importante para nós, 
        e estamos comprometidos em proteger suas informações pessoais. Esta Política de Privacidade explica como coletamos, 
        utilizamos e armazenamos seus dados.
        Ao utilizar nosso site, você concorda com os termos desta Política de Privacidade.
      </p>
    </section>

    <!-- Policy Sections -->
    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4">2. Dados que Coletamos</h2>
      <ul class="list-disc pl-5 space-y-2">
        <li>Nome completo, e-mail, telefone ou outras informações inseridas voluntariamente em formulários de contato ou inscrição.</li>
        <li>Informações de navegação, como endereço IP, tipo de navegador, páginas acessadas, data e hora do acesso, cookies e outras tecnologias de rastreamento.</li>
      </ul>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4">3. Como Utilizamos seus Dados</h2>
      <p class="leading-relaxed">
        Utilizamos seus dados para:
      </p>
      <ul class="list-disc pl-5 space-y-2 ">
        <li>Processar solicitações ou responder às suas mensagens.</li>
        <li>Melhorar nosso site e serviços.</li>
        <li>Enviar informações institucionais ou promocionais, se você der o seu consentimento.</li>
        <li>Cumprir obrigações legais ou regulatórias.</li>
      </ul>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4">4. Compartilhamento de Dados</h2>
      <p class="leading-relaxed">
        Não compartilhamos suas informações pessoais com terceiros, exceto:
      </p>
      <ol class="list-decimal pl-5 space-y-2">
        <li>Quando necessário para atender à sua solicitação (por exemplo, provedores de serviços);</li>
        <li>Para cumprir requisitos legais;</li>
        <li>Com parceiros de confiança, exclusivamente para fins institucionais e sob confidencialidade.</li>
      </ol>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4">5. Cookies e Tecnologias de Rastreamento</h2>
        <p class="leading-relaxed">
            Utilizamos cookies para:
        </p>
      <ol class="list-decimal pl-5 space-y-2">
        <li>Melhorar a sua experiência no site;</li>
        <li>Coletar dados estatísticos sobre o uso do site.</li>
      </ol>
        <p class="leading-relaxed">
            Você pode configurar seu navegador para recusar cookies. Note, no entanto, que algumas funcionalidades do site podem não operar corretamente.
        </p>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4">6. Segurança dos Dados</h2>
        <p class="leading-relaxed">
            Adotamos medidas de segurança técnicas e organizacionais para proteger suas informações contra acesso não autorizado, alteração, divulgação ou destruição.
        </p>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4">7. Seus Direitos</h2>
        <p class="leading-relaxed">
            De acordo com a LGPD, você tem os seguintes direitos:
        </p>
      <ol class="list-decimal pl-5 space-y-2">
        <li>Solicitar acesso aos seus dados pessoais.</li>
        <li>Corrigir informações incorretas ou desatualizadas.</li>
        <li>Solicitar a exclusão de dados pessoais, salvo quando exigidos por lei.</li>
        <li>Revogar o consentimento para o uso de seus dados.</li>
      </ol>
        <p class="leading-relaxed">
            Para exercer esses direitos, entre em contato conosco pelo e-mail: <a href="mailto:martini@martinitattoo.com">martini@martinitattoo.com</a>
        </p>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4">8. Alterações nesta Política</h2>
        <p class="leading-relaxed">
            Podemos atualizar esta Política de Privacidade periodicamente. Quaisquer alterações serão comunicadas neste site com a data de atualização.
        </p>
    </section>

    <!-- Contact Information -->
    <section>
      <h2 class="text-2xl font-semibold mb-4">9. Contato</h2>
      <p class="leading-relaxed">
        Se você tiver dúvidas ou preocupações sobre esta Política de Privacidade, entre em contato:
      </p>
      <div class="mt-4">
        <p><strong>Email:</strong> <a href="mailto:martini@martinitattoo.com">martini@martinitattoo.com</a></p>
        <p><strong>Endereço:</strong>Alameda Vicente Pinzon, 257 - Vila Olímpia - São Paulo</p>
      </div>
    </section>
  </main>

  <!-- Footer Section -->
  <footer class="footer flex flex-col justify-center items-center text-center md:text-left md:bg-left-top bg-center bg-no-repeat w-full bg-cover" style="background-image: url({{ asset('storage/' . $setting[0]['bg_footer']) }})">
        <div class="flex flex-col items-center gap-4 py-8">
            <img class="lazy rounded-[25px] max-h-[150px]" height="150px" data-src="{{ asset('storage/' . $setting[0]->logo) }}" alt="logo"> 
            <ul class="list-social inline-flex gap-4" role="list">
                @if($setting[0]['twitter'] != '')
                <li class="list-social__item">
                    <a target="_blank" href="https://twitter.com/{{$setting[0]['twitter']}}" class="link text-social__link hover:text-[#1cdfbc]">
                        <svg width="30" height="30" viewBox="0 0 19 18" fill="none" class="icon icon-twitter" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.0462914 0L7.3819 9.92811L0 18H1.66179L8.1253 10.9338L13.3464 18H19L11.2522 7.51415L18.1236 0.00146392H16.4618L10.5102 6.50992L5.70131 0.00146392H0.0477214L0.0462914 0ZM2.48907 1.23845H5.08663L16.5558 16.7601H13.9582L2.48907 1.23845Z" fill="currentColor"></path>
                        </svg>
                    </a>
                </li>
                @endif
                @if($setting[0]['facebook'] != '')
                <li class="list-social__item">
                    <a target="_blank" href="https://www.facebook.com/{{ $setting[0]['facebook'] }}" class="link text-social__link hover:text-[#1cdfbc]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-facebook" width="15" height="30" viewBox="0 0 10 22" fill="none">
                            <g clip-path="url(#clip0_423_5411)">
                                <path d="M0 6.23792H9.13208L8.64079 9.65017H0V6.23792ZM1.60489 4.98736C1.60489 1.52449 2.87034 0 6.36 0H9.1291V3.55815H6.45826C6.17539 3.55815 5.96399 3.66534 5.81809 3.87972C5.67219 4.0941 5.60073 4.37101 5.60073 4.71045V21.203H1.60489V4.99034V4.98736Z" fill="currentcolor"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_423_5411">
                                <rect width="9.13208" height="21.2" fill="currentcolor"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </li>
                @endif
                @if($setting[0]['instagram'] != '')
                <li class="list-social__item">
                    <a target="_blank" href="https://www.instagram.com/{{$setting[0]['instagram']}}" class="link text-social__link hover:text-[#1cdfbc]">
                        <svg width="30" height="30" aria-hidden="true" focusable="false" role="presentation" class="icon icon-instagram" viewBox="0 0 18 18">
                            <path fill="currentColor" d="M8.77 1.58c2.34 0 2.62.01 3.54.05.86.04 1.32.18 1.63.3.41.17.7.35 1.01.66.3.3.5.6.65 1 .12.32.27.78.3 1.64.05.92.06 1.2.06 3.54s-.01 2.62-.05 3.54a4.79 4.79 0 01-.3 1.63c-.17.41-.35.7-.66 1.01-.3.3-.6.5-1.01.66-.31.12-.77.26-1.63.3-.92.04-1.2.05-3.54.05s-2.62 0-3.55-.05a4.79 4.79 0 01-1.62-.3c-.42-.16-.7-.35-1.01-.66-.31-.3-.5-.6-.66-1a4.87 4.87 0 01-.3-1.64c-.04-.92-.05-1.2-.05-3.54s0-2.62.05-3.54c.04-.86.18-1.32.3-1.63.16-.41.35-.7.66-1.01.3-.3.6-.5 1-.65.32-.12.78-.27 1.63-.3.93-.05 1.2-.06 3.55-.06zm0-1.58C6.39 0 6.09.01 5.15.05c-.93.04-1.57.2-2.13.4-.57.23-1.06.54-1.55 1.02C1 1.96.7 2.45.46 3.02c-.22.56-.37 1.2-.4 2.13C0 6.1 0 6.4 0 8.77s.01 2.68.05 3.61c.04.94.2 1.57.4 2.13.23.58.54 1.07 1.02 1.56.49.48.98.78 1.55 1.01.56.22 1.2.37 2.13.4.94.05 1.24.06 3.62.06 2.39 0 2.68-.01 3.62-.05.93-.04 1.57-.2 2.13-.41a4.27 4.27 0 001.55-1.01c.49-.49.79-.98 1.01-1.56.22-.55.37-1.19.41-2.13.04-.93.05-1.23.05-3.61 0-2.39 0-2.68-.05-3.62a6.47 6.47 0 00-.4-2.13 4.27 4.27 0 00-1.02-1.55A4.35 4.35 0 0014.52.46a6.43 6.43 0 00-2.13-.41A69 69 0 008.77 0z"></path>
                            <path fill="currentColor" d="M8.8 4a4.5 4.5 0 100 9 4.5 4.5 0 000-9zm0 7.43a2.92 2.92 0 110-5.85 2.92 2.92 0 010 5.85zM13.43 5a1.05 1.05 0 100-2.1 1.05 1.05 0 000 2.1z"></path>
                        </svg>
                    </a>
                </li>
                @endif
                @if($setting[0]['youtube'] != '')
                <li class="list-social__item">
                    <a target="_blank" href="https://www.youtube.com/{{$setting[0]['youtube']}}" class="link text-social__link hover:text-[#1cdfbc]">
                        <svg width="30" height="30" aria-hidden="true" focusable="false" role="presentation" class="icon icon-youtube" viewBox="0 0 100 70">
                            <path d="M98 11c2 7.7 2 24 2 24s0 16.3-2 24a12.5 12.5 0 01-9 9c-7.7 2-39 2-39 2s-31.3 0-39-2a12.5 12.5 0 01-9-9c-2-7.7-2-24-2-24s0-16.3 2-24c1.2-4.4 4.6-7.8 9-9 7.7-2 39-2 39-2s31.3 0 39 2c4.4 1.2 7.8 4.6 9 9zM40 50l26-15-26-15v30z" fill="currentColor"></path>
                        </svg>
                    </a>
                </li>
                @endif
            </ul>
        </div>
        <div class="bg-black w-full p-4 flex md:flex-row flex-col md:text-[0.9rem] text-[0.8rem] justify-center items-center text-white">
            Todos os Direitos Reservados © 2024
        </div>
    </footer>
</div>
