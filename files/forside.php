<?php
// Child pages
// kunne bruge dette som inspiration
// https://wordpress.com/support/list-pages-shortcode/

add_shortcode('forside-link', 'forside_link');
function forside_link($atts) {
	global $post;
	ob_start();

	?>
<div class="link-con grid">
    <div class="card-1">
        <a href="#" class="card-1-link">
            <div class="card-1-bg"></div>
            <div class="card-1-title">
                Bliv elev
            </div>
            <div class="card-1-sub">
                Ny elev:
                <span class="card-1-sub-con">
                    Læs mere omkring vores skole og hvordan du melder dig ind.
                </span>
            </div>
        </a>
    </div>

    <div class="card-1">
        <a href="#" class="card-1-link">
            <div class="card-1-bg"></div>
            <div class="card-1-title">
                Undervisning
            </div>
            <div class="card-1-sub">
                Undervisningen:
                <span class="card-1-sub-con">
                    Læs mere omkring hvordan undervisningen forgår på vores skole
                </span>
            </div>
        </a>
    </div>

    <div class="card-1">
        <a href="#" class="card-1-link">
            <div class="card-1-bg"></div>
            <div class="card-1-title">
                Madordning
            </div>
            <div class="card-1-sub">
                Vi spiser:
                <span class="card-1-sub-con">
                    Læs mere omkring vores madordning på skolen
                </span>
            </div>
        </a>
    </div>

    <div class="card-1">
        <a href="#" class="card-1-link">
            <div class="card-1-bg"></div>
            <div class="card-1-title">
            Traditioner
            </div>
            <div class="card-1-sub">
            Traditioner:
                <span class="card-1-sub-con">
                    Læs mere omkring skolens mange traditioner
                </span>
            </div>
        </a>
    </div>

    <div class="card-1">
        <a href="#" class="card-1-link">
            <div class="card-1-bg"></div>
            <div class="card-1-title">
            Lejrskoler
            </div>
            <div class="card-1-sub">
            Vi rejser:
                <span class="card-1-sub-con">
                    Læs mere omkring skolens skønne og vigtige lejrskoler
                </span>
            </div>
        </a>
    </div>

    
    <div class="card-1">
        <a href="/shop" class="card-1-link">
            <div class="card-1-bg"></div>
            <div class="card-1-title">
            Web-shop
            </div>
            <div class="card-1-sub">
            Køb:
                <span class="card-1-sub-con">
                    Køb skolens merchandise
                </span>
            </div>
        </a>
    </div><div class="card-1">
        <a href="/shop" class="card-1-link">
            <div class="card-1-bg"></div>
            <div class="card-1-title">
            Web-shop
            </div>
            <div class="card-1-sub">
            Køb:
                <span class="card-1-sub-con">
                    Køb skolens merchandise
                </span>
            </div>
        </a>
    </div><div class="card-1">
        <a href="/shop" class="card-1-link">
            <div class="card-1-bg"></div>
            <div class="card-1-title">
            Web-shop
            </div>
            <div class="card-1-sub">
            Køb:
                <span class="card-1-sub-con">
                    Køb skolens merchandise
                </span>
            </div>
        </a>
    </div><div class="card-1">
        <a href="/shop" class="card-1-link">
            <div class="card-1-bg"></div>
            <div class="card-1-title">
            Web-shop
            </div>
            <div class="card-1-sub">
            Køb:
                <span class="card-1-sub-con">
                    Køb skolens merchandise
                </span>
            </div>
        </a>
    </div><div class="card-1">
        <a href="/shop" class="card-1-link">
            <div class="card-1-bg"></div>
            <div class="card-1-title">
            Web-shop
            </div>
            <div class="card-1-sub">
            Køb:
                <span class="card-1-sub-con">
                    Køb skolens merchandise
                </span>
            </div>
        </a>
    </div><div class="card-1">
        <a href="/shop" class="card-1-link">
            <div class="card-1-bg"></div>
            <div class="card-1-title">
            Web-shop
            </div>
            <div class="card-1-sub">
            Køb:
                <span class="card-1-sub-con">
                    Køb skolens merchandise
                </span>
            </div>
        </a>
    </div><div class="card-1">
        <a href="/shop" class="card-1-link">
            <div class="card-1-bg"></div>
            <div class="card-1-title">
            Web-shop
            </div>
            <div class="card-1-sub">
            Køb:
                <span class="card-1-sub-con">
                    Køb skolens merchandise
                </span>
            </div>
        </a>
    </div><div class="card-1">
        <a href="/shop" class="card-1-link">
            <div class="card-1-bg"></div>
            <div class="card-1-title">
            Web-shop
            </div>
            <div class="card-1-sub">
            Køb:
                <span class="card-1-sub-con">
                    Køb skolens merchandise
                </span>
            </div>
        </a>
    </div><div class="card-1">
        <a href="/shop" class="card-1-link">
            <div class="card-1-bg"></div>
            <div class="card-1-title">
            Web-shop
            </div>
            <div class="card-1-sub">
            Køb:
                <span class="card-1-sub-con">
                    Køb skolens merchandise
                </span>
            </div>
        </a>
    </div><div class="card-1">
        <a href="/shop" class="card-1-link">
            <div class="card-1-bg"></div>
            <div class="card-1-title">
            Web-shop
            </div>
            <div class="card-1-sub">
            Køb:
                <span class="card-1-sub-con">
                    Køb skolens merchandise
                </span>
            </div>
        </a>
    </div><div class="card-1">
        <a href="/shop" class="card-1-link">
            <div class="card-1-bg"></div>
            <div class="card-1-title">
            Web-shop
            </div>
            <div class="card-1-sub">
            Køb:
                <span class="card-1-sub-con">
                    Køb skolens merchandise
                </span>
            </div>
        </a>
    </div><div class="card-1">
        <a href="/shop" class="card-1-link">
            <div class="card-1-bg"></div>
            <div class="card-1-title">
            Web-shop
            </div>
            <div class="card-1-sub">
            Køb:
                <span class="card-1-sub-con">
                    Køb skolens merchandise
                </span>
            </div>
        </a>
    </div>
</div>
<?php

	$myvariable = ob_get_clean();
	return $myvariable;
}
