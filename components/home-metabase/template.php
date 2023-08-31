<?php

/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\BaseV2\Theme $this
 */

use MapasCulturais\i;

$this->import('
    mc-link
    mc-icon
');


?>
<div class="home-metabase">
    <div class="home-metabase__header">
        <div class="home-metabase__left">
            <h1 class="bold"><?php i::_e('Relatórios') ?></h1>
            <p class="semibold home-metabase__text"><?php i::_e('Acesse painéis de dados ao clicar no botão abaixo para visualizar gráficos e outras infomações importantes para consulta e análise') ?></p>
            <button  :class="['button', 'button--primary-noborder', {'button--large': $media('max-width: 500px')}]"><?php i::_e('Confira todos os painéis')?></button>

        </div>
        <div class="home-metabase__right">
            <img src="<?php $this->asset('img/business.png') ?>" class="home-metavase__img" />
        </div>
    </div>
    <div class="home-metabase__panel">
        <h4 v-if="!$media('max-width: 500px')" class="semibold home-metabase__subtitle"><?php i::_e('Confira abaixo alguns dados destacados') ?></h4>
        <p v-if="$media('max-width: 500px')" class="semibold home-metabase__subtitle"><?php i::_e('Confira abaixo alguns dados destacados') ?></p>
        <div class="home-metabase__content">
            <div class="home-metabase__card">
                <div class="home-metabase__cardtitle">
                    <mc-icon class="home-metabase__icon opportunity__color" name="opportunity"></mc-icon>
                    <h4 class="bold"><?php i::_e('Oportunidades') ?></h4>
                </div>
                <div class="home-metabase__opcard">
                    <div class="home-metabase__opinfo">
                        <strong :class="[$media('max-width: 500px') ? 'bold home-metabase__lmvalue' : 'bold home-metabase__leftvalue']">785</strong>

                        <label class="semibold home-metabase__leftlabel"><?php i::_e('oportunidades criadas') ?></label>
                    </div>
                    <div class="home-metabase__opinfo">

                        <strong v-if="!$media('max-width: 500px')" class="bold home-metabase__rightvalue ">785</strong>
                        <strong v-if="$media('max-width: 500px')" class="bold home-metabase__rightvalue">785</strong>
                        <label class="semibold home-metabase__rightlabel"><?php i::_e('oportunidades
                        certificadas') ?>
                        </label>
                    </div>
                </div>
                <button class="button button--primary button--large"><?php i::_e('Conferir painel de dados') ?></button>
            </div>
            <div class="home-metabase__card">
                <div class="home-metabase__cardtitle">
                    <mc-icon class="home-metabase__icon  agent__color" name="agent-1"></mc-icon>
                    <h4 class="bold"><?php i::_e('Agentes individuais') ?></h4>
                </div>
                <div class="home-metabase__spcinfo">
                    <strong class="bold home-metabase__value">2787</strong>
                    <label class="semibold home-metabase__leftlabel"><?php i::_e('agentes individuais cadastrados') ?></label>
                </div>
                <button class="button button--primary button--large"><?php i::_e('Conferir painel de dados') ?></button>
            </div>

            <div class="home-metabase__card">
                <div class="home-metabase__cardtitle">
                    <mc-icon class="home-metabase__icon  agent__color" name="agent-2"></mc-icon>
                    <h4 class="bold"><?php i::_e('Agentes coletivos') ?></h4>
                </div>
                <div class="home-metabase__opcard">
                    <div class="home-metabase__opinfo">
                        <strong :class="[$media('max-width: 500px') ? 'bold home-metabase__lmvalue' : 'bold home-metabase__leftvalue']">785</strong>
                        <label class="semibold home-metabase__label"><?php i::_e('coletivos cadastrados') ?></label>
                    </div>
                    <div class="home-metabase__opinfo">
                        <strong :class="[$media('max-width: 500px') ? 'bold home-metabase__rmvalue' : 'bold home-metabase__rightvalue']">785</strong>
                        <label class="semibold home-metabase__leftlabel"><?php i::_e('coletivos certificados') ?>
                        </label>
                    </div>
                </div>
                <button class="button button--primary button--large"><?php i::_e('Conferir painel de dados') ?></button>
            </div>

            <div class="home-metabase__card">
                <div class="home-metabase__cardtitle">
                    <mc-icon class="home-metabase__icon space__color" name="space"></mc-icon>
                    <h4 class="bold"><?php i::_e('Espaços') ?></h4>
                </div>
                <div class="home-metabase__spcinfo">
                    <strong class="bold home-metabase__value">2787</strong>
                    <label class="semibold home-metabase__leftlabel"><?php i::_e('espaços') ?></label>
                </div>
                <button class="button button--primary button--large"><?php i::_e('Conferir painel de dados') ?></button>
            </div>


            <div class="home-metabase__card">
                <div class="home-metabase__cardtitle">
                    <mc-icon class="home-metabase__icon project__color" name="project"></mc-icon>

                    <h4 class="bold"><?php i::_e('Projetos') ?></h4>
                </div>
                <div class="home-metabase__opcard">
                    <div class="home-metabase__opinfo">
                        <strong v-if="!$media('max-width: 500px')" class="bold home-metabase__leftvalue">785</strong>
                        <h2 v-if="$media('max-width: 500px')" class home="bold home-metabase__valuem">785</h2>
                        <label class="semibold home-metabase__label"><?php i::_e('projetos cadastrados') ?></label>
                    </div>
                    <div class="home-metabase__opinfo">

                        <strong v-if="!$media('max-width: 500px')" class="bold home-metabase__rightvalue ">785</strong>
                        <h3 v-if="$media('max-width: 500px')" class="bold">785</h3>
                        <h5 class="semibold"><?php i::_e('projetos com subprojetos') ?>
                        </h5>
                    </div>
                </div>
                <button class="button button--primary button--large"><?php i::_e('Conferir painel de dados') ?></button>
            </div>
        </div>
    </div>

</div>