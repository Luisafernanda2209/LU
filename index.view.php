<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos a la Fundación</title>
    <style>
        .tabs > div {
            display: none;
        }

        .tabs > div.active {
            display: block;
        }
    </style>
</head>
<body>

<div class="tabs">
    <div>
        FUNDACIÓN SALVANDO VIDAS
        <section>
    <h5>SERVICIOS QUE BRINDA LA FUNDACIÓN</h5>
    <div class="container"> 
        <div class="row">
            <div class="card link-danger">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <p class="card-text">Orientación: Identificar las necesidades mediante la orientación para establecer las rutas de acción adecuadas mediante el fortalecimiento de habilidades sociales como Regulación emocional, comunicación asertiva, entre otros.</p>
                    </div>
                  </div>
                </div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <p class="card-text">Enfoques: Mediante el enfoque cognitivo conductual se busca brindar terapia de exposición a largo plazo, acercándose gradualmente a los recuerdos, situaciones y emociones para equilibrarlas mediante de control y estrategias de afrontamiento.</p>
                    </div>
                  </div>
                </div class="col-lg-4 col-md-6 col-sm-12">>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <p class="card-text">Apoyo: Brindar apoyo a las víctimas de maltrato físico, psicológico, social, educativo y cultural mediante diversas técnicas y estrategias que promuevan su disminución y a su vez brindar apoyo psicológico adecuado.</p>
                    </div>
                  </div>
</div>

<script>
    let tabs = document.querySelectorAll('.tabs > div');

    function showTab(index) {
        tabs.forEach((tab, tabIndex) => {
            if(tabIndex === index) {
                tab.classList.add('active');
            } else {
                tab.classList.remove('active');
            }
        });
    }

    // Mostrar la primera pestaña al cargar la página
    showTab(0);
</script>

</body>
</html>
