bg = new Array(11); 
bg[0] = "topic_tree.jpg" ;
bg[1] = "topic_pond.jpg" ;
bg[2] = "topic_fog.jpg" ;
bg[3] = "topic_2ant.jpg" ;
bg[4] = "topic_dewdrop.jpg" ;
bg[5] = "topic_ant.jpg" ;
bg[6] = "topic_fly.jpg" ;
bg[7] = "topic_leaf.jpg" ;
bg[8] = "topic_lip.jpg" ;
bg[9] = "topic_poplar.jpg" ;
bg[10] = "topic_ladybug.jpg" ;
bgnumber = Math.floor(Math.random() * bg.length);
bgload="#Top{background:#eee url(http://www.minibird.com/blog/templates/minitemplate/img/"+bg[bgnumber]+") ;}" ;

document.open();
document.write("<style type='text/css'>")
document.write(bgload);
document.write("</style>");
document.close();