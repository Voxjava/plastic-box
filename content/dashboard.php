<!--<script>
	$(function() {
		$( ".sortable" ).sortable();
		$( ".sortable" ).disableSelection();
                $( "div.dash" ).resizable();
	});
</script>-->
<script>
	$(function() {
		$( ".sortable" )
			.accordion({
				header: "> div > li"
			})
			.sortable({
				axis: "y",
				handle: "li",
				stop: function( event, ui ) {
					// IE doesn't register the blur when sorting
					// so trigger focusout handlers to remove .ui-state-focus
					ui.item.children( "li" ).triggerHandler( "focusout" );
				}
			});
	});
	</script>

<section id="content_ppal">
    
<!--Dashboard-->
    <div class="content">
       <div class="content-head">
            <h5>Dashboard</h5>
             <div id="logo-dash"></div>
        </div>
        <div class="content-section">
         <ul class="sortable">
             <div class="group">
            <li><a href="#">ferfrefe</a></li> 
            <div>
            <p>Lorem ipsum dolor sit amet,
                vel aliquam ut libero fringilla
                tincidunt augue, semper dictum eleifend
                et ut, id mi. Leo dapibus ullamcorper morbi
                lobortis, pretium integer sed consequat consequat,
                lectus mauris nisl. A sed, ut massa mauris, sit enim donec.
                Neque etiam tristique praesent sapien rhoncus, 
                aenean id erat porttitor id sed leo, pellentesque 
                turpis varius mauris bibendum. Luctus ipsum nulla 
                in luctus, leo faucibus in rutrum gravida, suspendisse
                molestie, iaculis aliquam ut lacus ligula id lorem.
                Maecenas pede tempor volutpat nec, ornare voluptatem 
                rhoncus turpis, id turpis purus eros purus quis eget,
                dictum scelerisque fringilla nostra, at velit mauris dignissim.
                Sodales et faucibus, inceptos nonummy. Quis tempora malesuada non mi.
                Id et faucibus dolor, parturient magna vel, ac ultricies viverra vel.
                Viverra nisl rutrum phasellus, integer elit duis urna nulla odio magna,
                ultricies at at cras tempus.</p>   
            </div>
             </div>
            <div class="group">
            <li><a href="#">ferfrefe</a></li>  
            <div>
            <p>Lorem ipsum dolor sit amet,
                vel aliquam ut libero fringilla
                tincidunt augue, semper dictum eleifend
                et ut, id mi. Leo dapibus ullamcorper morbi
                lobortis, pretium integer sed consequat consequat,
                lectus mauris nisl. A sed, ut massa mauris, sit enim donec.
                Neque etiam tristique praesent sapien rhoncus, 
                aenean id erat porttitor id sed leo, pellentesque 
                turpis varius mauris bibendum. Luctus ipsum nulla 
                in luctus, leo faucibus in rutrum gravida, suspendisse
                molestie, iaculis aliquam ut lacus ligula id lorem.
                Maecenas pede tempor volutpat nec, ornare voluptatem 
                rhoncus turpis, id turpis purus eros purus quis eget,
                dictum scelerisque fringilla nostra, at velit mauris dignissim.
                Sodales et faucibus, inceptos nonummy. Quis tempora malesuada non mi.
                Id et faucibus dolor, parturient magna vel, ac ultricies viverra vel.
                Viverra nisl rutrum phasellus, integer elit duis urna nulla odio magna,
                ultricies at at cras tempus.</p>       
             </div>    
            </div>
            <div class="group">
            <li><a href="#">ferfrefe</a></li>  
            <div>
            <p>Lorem ipsum dolor sit amet,
                vel aliquam ut libero fringilla
                tincidunt augue, semper dictum eleifend
                et ut, id mi. Leo dapibus ullamcorper morbi
                lobortis, pretium integer sed consequat consequat,
                lectus mauris nisl. A sed, ut massa mauris, sit enim donec.
                Neque etiam tristique praesent sapien rhoncus, 
                aenean id erat porttitor id sed leo, pellentesque 
                turpis varius mauris bibendum. Luctus ipsum nulla 
                in luctus, leo faucibus in rutrum gravida, suspendisse
                molestie, iaculis aliquam ut lacus ligula id lorem.
                Maecenas pede tempor volutpat nec, ornare voluptatem 
                rhoncus turpis, id turpis purus eros purus quis eget,
                dictum scelerisque fringilla nostra, at velit mauris dignissim.
                Sodales et faucibus, inceptos nonummy. Quis tempora malesuada non mi.
                Id et faucibus dolor, parturient magna vel, ac ultricies viverra vel.
                Viverra nisl rutrum phasellus, integer elit duis urna nulla odio magna,
                ultricies at at cras tempus.</p>       
             </div>    
            </div>
            
        </ul>        
        </div> 
    </div>  
            


<!--Post-it-->

    <div class="dash">
        <div class="dash_head"><h6>M&Eacute;MO</h6>
            <a href="#" id="handle">Ajouter +</a>
            <div class="close"></div>
        </div>        
         <div class="dash_content">
                
        </div> 
    </div>
</section>