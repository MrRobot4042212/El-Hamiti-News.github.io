  <header id="header">
        <a href="./index.php" class="logo"><img src="./data/img/logo.png" alt="logo de la empresa" ></a>
        <nav>
            <ul class="url">
                <li>
                        <form action="./index.php" method="get">
                              <input type="hidden" name="lang" value="en">
                              <button class="textButton" type="submit">Main Page</button>
                        </form>
                </li>
                <li><a class="optLink" href="./aboutUs.php">About Us</a></li>
                <li><a class="idiomas">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ai ai-Language"><path d="M14 19c3.771 0 5.657 0 6.828-1.172C22 16.657 22 14.771 22 11c0-3.771 0-5.657-1.172-6.828C19.657 3 17.771 3 14 3h-4C6.229 3 4.343 3 3.172 4.172 2 5.343 2 7.229 2 11c0 3.771 0 5.657 1.172 6.828.653.654 1.528.943 2.828 1.07"/><path d="M14 19c-1.236 0-2.598.5-3.841 1.145-1.998 1.037-2.997 1.556-3.489 1.225-.492-.33-.399-1.355-.212-3.404L6.5 17.5"/><path d="M5.5 13.5l1-2m0 0l1.106-2.211a1 1 0 0 1 1.788 0L10.5 11.5m-4 0h4m0 0l1 2m1-6h1.982V9c0 .5-.496 1.5-1.487 1.5m3.964-3v2m0 0v4m0-4H18.5"/></svg>
                    <ul class="contenedorIdiomas hidden">
                    <a><li>
                          <form action="./aboutUs.php" method="get">
                              <input type="hidden" name="lang" value="es">
                              <button type="submit">Español</button>
                          </form>
                      </li></a>
                      <a><li>
                          <form action="./aboutUs.php" method="get">
                              <input type="hidden" name="lang" value="en">
                              <button type="submit">English</button>
                          </form>
                      </li></a>
                    </ul>
                </a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="contenedorAbout">
            <div class="infoEmpresa">
                <h1>Our Company</h1>
                <p>
                    Welcome to our leading IT news company in the market! At the heart of our mission is the commitment to provide our clients with the most up-to-date, reliable, and relevant information in the world of technology. We are more than just a news source; we are your trusted partner in the vast and ever-changing technological landscape.
                </p>
                <h1>Team</h1>
                <p>
                    Our company is composed of different departments: <br>
                    - Networks Department & services: Antonio Perales, Felipe Gimenez, Josias  Gonzalez, and Alfonso Chicoma <br>
                    - Web development: Alfonso Chicoma <br>
                    - Marketing Department: Ismael El Hamiti <br>
                </p>
                <div class="imgEquipo">
                    <div class="carta">
                        <img src="./data/img/equipo/antonioPerales.png">
                        <p>Antonio Perales</p>
                    </div>
                    <div class="carta">
                        <img src="./data/img/equipo/Felipe.png">
                        <p>Felipe Gimenez</p>
                    </div>
                    <div class="carta">
                        <img src="./data/img/equipo/Josias_2.png">
                        <p>Josias Gonzalez</p>
                    </div>
                    <div class="carta">
                        <img src="./data/img/equipo/alfonso.png">
                        <p>Alfonso Chicoma</p>
                    </div>
                    <div class="carta">
                        <img src="./data/img/equipo/ismael.png">
                        <p>Ismael El Hamiti</p>
                    </div>
                </div>

            </div>

            <div class="serviciosEmpresa">
                <h1>What we offer</h1>
                <p>
                    Our services encompass a wide range of platforms to meet the needs of our diverse clients. Firstly, we offer an online news portal that features detailed articles, in-depth analyses, and exclusive interviews with industry leaders. Here, you can explore emerging trends, discover new innovations, and stay updated with the latest developments in the world of technology.

                    In addition to our online portal, we also offer email newsletters, delivering the most important news directly to your inbox. These newsletters are designed to be concise and accessible, providing you with essential information quickly and conveniently.
                </p>
                <div class="contenedorNewsletter">
                    <h2>Suscribe to our newsletter</h2>
                    <form action="./newsletterPost.php" method="post">
                        <input type="text" name="correo" id="inputCorreo" placeholder="Introduce your email">
                        <button type="submit">¡Join!</button>

                    </form>
                </div>

            </div>
        </div>

    </main>

    <footer class="footer">
        <div class="background">
            <svg class="fondoFooter"
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              x="0px"
              y="0px"
              width="100%"
              height="100%"
              viewBox="0 0 1600 900"
            >
              <defs>
                <linearGradient id="bg" x2="0%" y2="100%">
                  <stop id="stopColor1"
                    offset="0%"
                    style="stop-color:rgb(59, 117, 127,0.3)"
                  ></stop>
                  <stop id="stopColor2"
                    offset="100%"
                    style="stop-color: rgb(59, 117, 127,1)"
                  ></stop>
                </linearGradient>
                <path
                  id="wave"
                  fill="url(#bg)"
                  d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
            s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z"
                />
              </defs>
              <g>
                <use xlink:href="#wave" opacity=".3">
                  <animateTransform
                    attributeName="transform"
                    attributeType="XML"
                    type="translate"
                    dur="8s"
                    calcMode="spline"
                    values="270 230; -334 180; 270 230"
                    keyTimes="0; .5; 1"
                    keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                    repeatCount="indefinite"
                  />
                </use>
                <use xlink:href="#wave" opacity=".6">
                  <animateTransform
                    attributeName="transform"
                    attributeType="XML"
                    type="translate"
                    dur="6s"
                    calcMode="spline"
                    values="-270 230;243 220;-270 230"
                    keyTimes="0; .6; 1"
                    keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                    repeatCount="indefinite"
                  />
                </use>
                <use xlink:href="#wave" opacty=".9">
                  <animateTransform
                    attributeName="transform"
                    attributeType="XML"
                    type="translate"
                    dur="4s"
                    calcMode="spline"
                    values="0 230;-140 200;0 230"
                    keyTimes="0; .4; 1"
                    keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                    repeatCount="indefinite"
                  />
                </use>
              </g>
            </svg>
          </div>
        <p> El Hamiti News S.A &copy;2024 </p>
        <p>All rights reserved</p>
        <aside class="mediaIconos">
            <a href="https://github.com/MrRobot4042212/Elhamiti.Inc">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="currentColor" stroke-width="2" class="ai ai-GithubFill"><g clip-path="url(#clip0_100_4)"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z"/></g><defs><clipPath id="clip0_100_4"><rect width="24" height="24"/></clipPath></defs></svg>
            </a>
            <a>
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="currentColor" stroke-width="2" class="ai ai-FacebookFill"><g clip-path="url(#clip0_65_70)"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 12.067C0 18.033 4.333 22.994 10 24v-8.667H7V12h3V9.333c0-3 1.933-4.666 4.667-4.666.866 0 1.8.133 2.666.266V8H15.8c-1.467 0-1.8.733-1.8 1.667V12h3.2l-.533 3.333H14V24c5.667-1.006 10-5.966 10-11.933C24 5.43 18.6 0 12 0S0 5.43 0 12.067z"/></g><defs><clipPath id="clip0_65_70"><rect width="24" height="24"/></clipPath></defs></svg>
            </a>
            <a>
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="currentColor" stroke-width="2" class="ai ai-WhatsappFill"><g clip-path="url(#clip0_615_275)"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.415 14.382c-.298-.149-1.759-.867-2.031-.967-.272-.099-.47-.148-.669.15-.198.296-.767.966-.94 1.164-.174.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.019-.458.13-.606.134-.133.297-.347.446-.52.149-.174.198-.298.297-.497.1-.198.05-.371-.025-.52-.074-.149-.668-1.612-.916-2.207-.241-.579-.486-.5-.668-.51-.174-.008-.372-.01-.57-.01-.198 0-.52.074-.792.372-.273.297-1.04 1.016-1.04 2.479 0 1.462 1.064 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.71.306 1.263.489 1.694.625.712.227 1.36.195 1.872.118.57-.085 1.758-.719 2.006-1.413.247-.694.247-1.289.173-1.413-.074-.124-.272-.198-.57-.347zm-5.422 7.403h-.004a9.87 9.87 0 0 1-5.032-1.378l-.36-.214-3.742.982.999-3.648-.235-.374a9.861 9.861 0 0 1-1.511-5.26c.002-5.45 4.436-9.884 9.889-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.892 6.993c-.002 5.45-4.436 9.885-9.884 9.885zm8.412-18.297A11.815 11.815 0 0 0 11.992 0C5.438 0 .102 5.335.1 11.892c-.001 2.096.546 4.142 1.587 5.945L0 24l6.304-1.654a11.881 11.881 0 0 0 5.684 1.448h.005c6.554 0 11.89-5.335 11.892-11.893a11.821 11.821 0 0 0-3.48-8.413"/></g><defs><clipPath id="clip0_615_275"><rect width="24" height="24"/></clipPath></defs></svg>
            </a>
            <a>
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="currentColor" stroke-width="2" class="ai ai-InstagramFill"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.465 1.066C8.638 1.012 9.012 1 12 1c2.988 0 3.362.013 4.534.066 1.172.053 1.972.24 2.672.511.733.277 1.398.71 1.948 1.27.56.549.992 1.213 1.268 1.947.272.7.458 1.5.512 2.67C22.988 8.639 23 9.013 23 12c0 2.988-.013 3.362-.066 4.535-.053 1.17-.24 1.97-.512 2.67a5.396 5.396 0 0 1-1.268 1.949c-.55.56-1.215.992-1.948 1.268-.7.272-1.5.458-2.67.512-1.174.054-1.548.066-4.536.066-2.988 0-3.362-.013-4.535-.066-1.17-.053-1.97-.24-2.67-.512a5.397 5.397 0 0 1-1.949-1.268 5.392 5.392 0 0 1-1.269-1.948c-.271-.7-.457-1.5-.511-2.67C1.012 15.361 1 14.987 1 12c0-2.988.013-3.362.066-4.534.053-1.172.24-1.972.511-2.672a5.396 5.396 0 0 1 1.27-1.948 5.392 5.392 0 0 1 1.947-1.269c.7-.271 1.5-.457 2.67-.511zm8.98 1.98c-1.16-.053-1.508-.064-4.445-.064-2.937 0-3.285.011-4.445.064-1.073.049-1.655.228-2.043.379-.513.2-.88.437-1.265.822a3.412 3.412 0 0 0-.822 1.265c-.151.388-.33.97-.379 2.043-.053 1.16-.064 1.508-.064 4.445 0 2.937.011 3.285.064 4.445.049 1.073.228 1.655.379 2.043.176.477.457.91.822 1.265.355.365.788.646 1.265.822.388.151.97.33 2.043.379 1.16.053 1.507.064 4.445.064 2.938 0 3.285-.011 4.445-.064 1.073-.049 1.655-.228 2.043-.379.513-.2.88-.437 1.265-.822.365-.355.646-.788.822-1.265.151-.388.33-.97.379-2.043.053-1.16.064-1.508.064-4.445 0-2.937-.011-3.285-.064-4.445-.049-1.073-.228-1.655-.379-2.043-.2-.513-.437-.88-.822-1.265a3.413 3.413 0 0 0-1.265-.822c-.388-.151-.97-.33-2.043-.379zm-5.85 12.345a3.669 3.669 0 0 0 4-5.986 3.67 3.67 0 1 0-4 5.986zM8.002 8.002a5.654 5.654 0 1 1 7.996 7.996 5.654 5.654 0 0 1-7.996-7.996zm10.906-.814a1.337 1.337 0 1 0-1.89-1.89 1.337 1.337 0 0 0 1.89 1.89z"/></svg>
            </a>
        </aside>
    </footer>
  

