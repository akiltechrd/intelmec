<?php

/** @var yii\web\View $this */
use yii\bootstrap5\Html;

$this->title = 'Sobre nosotros';
?>
<?= $this->render('/site/_header', ['header' => 'Sobre Nosotros']) ?>

<div class="abouttop">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="<?= Yii::$app->getHomeUrl(); ?>images/team/equipo.jpg" alt="">
            </div>
            <div class="col-md-8">
                <h3>Intelmec Agroindustrial</h3>
                <p>
                    En el 1985, Rafael Amauris Féliz funda Ingeniería y Técnica Electromecánica INTELMEC, como empresa de
                    servicios electromecánicos destinada principalmente a instalación y mantenimiento de equipos eléctricos
                    en la localidad de Cotuí, República Dominicana; zona conocida por su gran producción arrocera.
                </p>
                
                <p>
                    Durante los años posteriores a su fundación, INTELMEC se consolida como prestador de servicios eléctricos de más alta
                    calidad de la zona, expandiendo su campo de acción hasta las provincias de Maria Trinidad Sánchez, San Fco. de Macorís
                    y La Vega.
                </p>
                
                <p>
                    Conforme las necesidades de sus clientes fueron creciendo, fue incursionando en el campo del procesamiento de arroz, 
                    logrando hacer innumerables innovaciones en las maquinarias usadas para tal fin y el desarrollo de otras nuevas. Entre 
                    los principales aportes podemos citar el desarrollo de un horno intercambiador de calor de fuego indirecto para el secado
                    de arroz totalmente automatizado, usando cascarilla de arroz como combustible, que mejoró considerablemente los tiempos de
                    secado del cereal; sistemas de recolección de cenizas de arroz del tipo húmedo, entre otros.

                </p>
                <p>
                    
Hoy en día, INTELMEC cuenta con capital humano altamente competitivo, comprometidos a brindar un servicio de calidad a sus clientes, con el fin de satisfacer las necesidades de los mismos. 
                </p>
            </div>
             
        </div>
    </div>
</div>