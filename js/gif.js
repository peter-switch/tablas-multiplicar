var changeIMG1 = new Array();
changeIMG1[0] =
  "https://giphy.com/gifs/brawlstars-official-dj-frank-djfrank-Jsu7wXi2uhtzfR94mQ";
changeIMG1[1] = "https://media1.giphy.com/media/CtEH4E31mzF1S/giphy.gif";
changeIMG1[2] =
  "https://37.media.tumblr.com/6273dcf98ec8b040ab7d201a05ca17fb/tumblr_mr6eleKMXY1rp0vkjo1_500.gif";
changeIMG1[3] = "https://media.tenor.com/UOuSemWPNc0AAAAC/funko-pop.gif";
changeIMG1[4] = "https://i.gifer.com/21Yk.gif";

var changeIMG2 = new Array();

changeIMG2[0] = "https://giffiles.alphacoders.com/208/208014.gif";
changeIMG2[1] = "https://media2.giphy.com/media/GRSnxyhJnPsaQy9YLn/giphy.gif";
changeIMG2[2] = "https://media4.giphy.com/media/5i7umUqAOYYEw/giphy.gif";
changeIMG2[3] = "https://media0.giphy.com/media/kBZBlLVlfECvOQAVno/giphy.gif";
changeIMG2[4] = "https://c.tenor.com/glbyPW2lSGMAAAAC/funko-batman.gif";

var changeIMG3 = new Array();

changeIMG3[0] = "https://media1.giphy.com/media/bU7dZbZrx7NsrMpfxV/giphy.gif";
changeIMG3[1] = "https://media3.giphy.com/media/NfzERYyiWcXU4/giphy.gif";
changeIMG3[2] = "https://media0.giphy.com/media/4Iw2OzgiiTc4M/giphy.gif";
changeIMG3[3] = "https://media3.giphy.com/media/Q56ZI04r6CakM/giphy.gif";
changeIMG3[4] = "https://c.tenor.com/i69Hhnet86sAAAAC/funko-hulk.gif";

function cambiar() {
  document.getElementById("randomIMG").src =
    changeIMG1[Math.floor(Math.random() * 5)];
  document.getElementById("randomIMG2").src =
    changeIMG2[Math.floor(Math.random() * 5)];
  document.getElementById("randomIMG3").src =
    changeIMG3[Math.floor(Math.random() * 5)];
}
