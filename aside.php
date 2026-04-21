<input type="checkbox" id="nav-toggle" class="nav-toggle no-print" />
<label for="nav-toggle" class="nav-toggle-label no-print"><span></span></label>
<label for="nav-toggle" class="nav-overlay no-print"></label>

<aside>
  <a href="/cv/" class="big">
    <figure>
      <img title="<?php echo $profile['name']; ?>" src="<?php echo $profile['photo']; ?>" alt="<?php echo $profile['name']; ?>" />
    </figure>
  </a>

  <address>
    <ul>
      <li>
        <a href="<?php echo $profile['website_url']; ?>" target="_blank" class="big">
          <strong><?php echo $profile['website']; ?></strong>
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="#EE2455" aria-hidden="true" style="vertical-align:middle;margin:0 4px;">
            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
          </svg>
          <?php echo $profile['location']; ?>
        </a>
      </li>
      <li>
        <a href="tel:<?php echo $profile['phone_raw']; ?>" class="big"><?php echo $profile['phone']; ?></a>
        <a href="https://wa.me/<?php echo $profile['whatsapp']; ?>" target="_blank" title="WhatsApp" class="no-print" style="vertical-align:middle;margin-left:8px;opacity:.6;">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32" aria-label="WhatsApp">
            <path fill="#25D366" d="M23.328 19.177c-.401-.203-2.354-1.156-2.719-1.292c-.365-.13-.63-.198-.896.203c-.26.391-1.026 1.286-1.26 1.547s-.464.281-.859.104c-.401-.203-1.682-.62-3.203-1.984c-1.188-1.057-1.979-2.359-2.214-2.76c-.234-.396-.026-.62.172-.818c.182-.182.401-.458.604-.698c.193-.24.255-.401.396-.661c.13-.281.063-.5-.036-.698s-.896-2.161-1.229-2.943c-.318-.776-.651-.677-.896-.677c-.229-.021-.495-.021-.76-.021s-.698.099-1.063.479c-.365.401-1.396 1.359-1.396 3.297c0 1.943 1.427 3.823 1.625 4.104c.203.26 2.807 4.26 6.802 5.979c.953.401 1.693.641 2.271.839c.953.302 1.823.26 2.51.161c.76-.125 2.354-.964 2.688-1.901c.339-.943.339-1.724.24-1.901c-.099-.182-.359-.281-.76-.458zM16.083 29h-.021c-2.365 0-4.703-.641-6.745-1.839l-.479-.286l-5 1.302l1.344-4.865l-.323-.5a13.166 13.166 0 0 1-2.021-7.01c0-7.26 5.943-13.182 13.255-13.182c3.542 0 6.865 1.38 9.365 3.88a13.058 13.058 0 0 1 3.88 9.323C29.328 23.078 23.39 29 16.088 29zM27.359 4.599C24.317 1.661 20.317 0 16.062 0C7.286 0 .14 7.115.135 15.859c0 2.792.729 5.516 2.125 7.927L0 32l8.448-2.203a16.13 16.13 0 0 0 7.615 1.932h.005c8.781 0 15.927-7.115 15.932-15.865c0-4.234-1.651-8.219-4.661-11.214z" />
          </svg>
        </a>
      </li>
      <li>
        <strong><em><a href="mailto:<?php echo $profile['email']; ?>" class="big"><?php echo $profile['email']; ?></a></em></strong>
      </li>
    </ul>
  </address>

  <ul class="social-links-menu">
    <li>
      <a href="<?php echo $profile['linkedin']; ?>" title="LinkedIn" target="_blank">
        <span>LinkedIn</span>
        <svg class="svg-icon" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M19.7,3H4.3C3.582,3,3,3.582,3,4.3v15.4C3,20.418,3.582,21,4.3,21h15.4c0.718,0,1.3-0.582,1.3-1.3V4.3 C21,3.582,20.418,3,19.7,3z M8.339,18.338H5.667v-8.59h2.672V18.338z M7.004,8.574c-0.857,0-1.549-0.694-1.549-1.548 c0-0.855,0.691-1.548,1.549-1.548c0.854,0,1.547,0.694,1.547,1.548C8.551,7.881,7.858,8.574,7.004,8.574z M18.339,18.338h-2.669 v-4.177c0-0.996-0.017-2.278-1.387-2.278c-1.389,0-1.601,1.086-1.601,2.206v4.249h-2.667v-8.59h2.559v1.174h0.037 c0.356-0.675,1.227-1.387,2.526-1.387c2.703,0,3.203,1.779,3.203,4.092V18.338z"/></svg>
      </a>
    </li>
    <li>
      <a href="<?php echo $profile['github']; ?>" title="GitHub" target="_blank">
        <span>GitHub</span>
        <svg class="svg-icon" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M12,2C6.477,2,2,6.477,2,12c0,4.419,2.865,8.166,6.839,9.489c0.5,0.09,0.682-0.218,0.682-0.484 c0-0.236-0.009-0.866-0.014-1.699c-2.782,0.602-3.369-1.34-3.369-1.34c-0.455-1.157-1.11-1.465-1.11-1.465 c-0.909-0.62,0.069-0.608,0.069-0.608c1.004,0.071,1.532,1.03,1.532,1.03c0.891,1.529,2.341,1.089,2.91,0.833 c0.091-0.647,0.349-1.086,0.635-1.337c-2.22-0.251-4.555-1.111-4.555-4.943c0-1.091,0.39-1.984,1.03-2.682 C6.546,8.54,6.202,7.524,6.746,6.148c0,0,0.84-0.269,2.75,1.025C10.295,6.95,11.15,6.84,12,6.836 c0.85,0.004,1.705,0.114,2.504,0.336c1.909-1.294,2.748-1.025,2.748-1.025c0.546,1.376,0.202,2.394,0.1,2.646 c0.64,0.699,1.026,1.591,1.026,2.682c0,3.841-2.337,4.687-4.565,4.935c0.359,0.307,0.679,0.917,0.679,1.852 c0,1.335-0.012,2.415-0.012,2.741c0,0.269,0.18,0.579,0.688,0.481C19.138,20.161,22,16.416,22,12C22,6.477,17.523,2,12,2z"/></svg>
      </a>
    </li>
  </ul>

  <nav class="no-print" aria-label="Page sections">
    <ul>
      <li><strong>SECTIONS</strong></li>
      <li><a href="/cv/<?php echo $target_key; ?>#intro">INTRO</a></li>
      <li><a href="/cv/letter/<?php echo $target_key; ?>">COVER LETTER</a></li>
      <li><a href="/cv/<?php echo $target_key; ?>#experience">EXPERIENCE</a></li>
      <li><a href="/cv/<?php echo $target_key; ?>#formation">FORMATION</a></li>
      <li><a href="/cv/<?php echo $target_key; ?>#skills">TECHNICAL SKILLS</a></li>
      <li><strong>ACTIONS</strong></li>
      <li><a href="/cv/contact">Contact Me</a></li>
      <li><a href="javascript:window.print()">Print to PDF / Paper</a></li>
      <li><a href="https://translate.google.com/translate?sl=en&tl=es&u=https://xarop.com/cv/<?php echo $target_key; ?>">Translate to Spanish</a></li>
    </ul>
  </nav>

  <ul class="social-links-menu no-print">
    <li>
      <a href="https://translate.google.com/translate?sl=en&tl=es&u=https://xarop.com/cv/<?php echo $target_key; ?>" title="Translate">
        <span>Translate</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true"><path fill="currentColor" d="M27.85 29H30l-6-15h-2.35l-6 15h2.15l1.6-4h6.85zm-7.65-6l2.62-6.56L25.45 23zM18 7V5h-7V2H9v3H2v2h10.74a14.71 14.71 0 0 1-3.19 6.18A13.5 13.5 0 0 1 7.26 9h-2.1a16.47 16.47 0 0 0 3 5.58A16.84 16.84 0 0 1 3 18l.75 1.86A18.47 18.47 0 0 0 9.53 16a16.92 16.92 0 0 0 5.76 3.84L16 18a14.48 14.48 0 0 1-5.12-3.37A17.64 17.64 0 0 0 14.8 7z"/></svg>
      </a>
    </li>
    <li>
      <a href="/cv/letter/<?php echo $target_key; ?>" title="Cover Letter">
        <span>Cover Letter</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true"><path fill="currentColor" d="M28 8h-4V6c0-1.1-.9-2-2-2H10c-1.1 0-2 .9-2 2v2H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h24c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM10 6h12v2H10V6zm18 18H4V10h24v14z"/></svg>
      </a>
    </li>
    <li>
      <a href="javascript:window.print()" title="Print PDF">
        <span>Print PDF</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true"><path fill="currentColor" d="M24 6.5V8h1a5 5 0 0 1 5 5v7.5a3.5 3.5 0 0 1-3.5 3.5H25v1.5a3.5 3.5 0 0 1-3.5 3.5h-11A3.5 3.5 0 0 1 7 25.5V24H5.5A3.5 3.5 0 0 1 2 20.5V13a5 5 0 0 1 5-5h1V6.5A3.5 3.5 0 0 1 11.5 3h9A3.5 3.5 0 0 1 24 6.5m-14 0V8h12V6.5A1.5 1.5 0 0 0 20.5 5h-9A1.5 1.5 0 0 0 10 6.5m-1 19a1.5 1.5 0 0 0 1.5 1.5h11a1.5 1.5 0 0 0 1.5-1.5v-6a1.5 1.5 0 0 0-1.5-1.5h-11A1.5 1.5 0 0 0 9 19.5zM25 22h1.5a1.5 1.5 0 0 0 1.5-1.5V13a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v7.5A1.5 1.5 0 0 0 5.5 22H7v-2.5a3.5 3.5 0 0 1 3.5-3.5h11a3.5 3.5 0 0 1 3.5 3.5z"/></svg>
      </a>
    </li>
  </ul>
</aside>

<script>
  document.querySelectorAll('aside a').forEach(function(link) {
    link.addEventListener('click', function() {
      var toggle = document.getElementById('nav-toggle');
      if (toggle) toggle.checked = false;
    });
  });
</script>
