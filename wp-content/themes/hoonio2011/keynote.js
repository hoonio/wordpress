            var images = new Array (25);
            images[0] = "http://www.hoonio.com/blog/uploads/mobile-ecosystem/mobile-ecosystem.001.jpg";
            images[1] = "http://www.hoonio.com/blog/uploads/mobile-ecosystem/mobile-ecosystem.002.jpg";
            images[2] = "http://www.hoonio.com/blog/uploads/mobile-ecosystem/mobile-ecosystem.003.jpg";
            images[3] = "http://www.hoonio.com/blog/uploads/mobile-ecosystem/mobile-ecosystem.004.jpg";
            images[4] = "http://www.hoonio.com/blog/uploads/mobile-ecosystem/mobile-ecosystem.005.jpg";
            images[5] = "http://www.hoonio.com/blog/uploads/mobile-ecosystem/mobile-ecosystem.006.jpg";
            images[6] = "http://www.hoonio.com/blog/uploads/mobile-ecosystem/mobile-ecosystem.007.jpg";
            images[7] = "http://www.hoonio.com/blog/uploads/mobile-ecosystem/mobile-ecosystem.008.jpg";
            images[8] = "http://www.hoonio.com/blog/uploads/mobile-ecosystem/mobile-ecosystem.009.jpg";
            images[9] = "http://www.hoonio.com/blog/uploads/mobile-ecosystem/mobile-ecosystem.010.jpg";
            images[10] = "http://www.hoonio.com/blog/uploads/mobile-ecosystem/mobile-ecosystem.011.jpg";
            images[11] = "http://www.hoonio.com/blog/uploads/mobile-ecosystem/mobile-ecosystem.012.jpg";
            images[12] = "http://www.hoonio.com/blog/uploads/mobile-ecosystem/mobile-ecosystem.013.jpg";
            images[13] = "http://www.hoonio.com/blog/uploads/mobile-ecosystem/mobile-ecosystem.014.jpg";
            images[14] = "http://www.hoonio.com/blog/uploads/mobile-ecosystem/mobile-ecosystem.015.jpg";
            images[15] = "http://www.hoonio.com/blog/uploads/mobile-ecosystem/mobile-ecosystem.016.jpg";
            images[16] = "http://www.hoonio.com/blog/uploads/mobile-ecosystem/mobile-ecosystem.017.jpg";
            images[17] = "http://www.hoonio.com/blog/uploads/mobile-ecosystem/mobile-ecosystem.018.jpg";
            images[18] = "http://www.hoonio.com/blog/uploads/mobile-ecosystem/mobile-ecosystem.019.jpg";
            images[19] = "http://www.hoonio.com/blog/uploads/mobile-ecosystem/mobile-ecosystem.020.jpg";
            images[20] = "http://www.hoonio.com/blog/uploads/mobile-ecosystem/mobile-ecosystem.021.jpg";
            images[21] = "http://www.hoonio.com/blog/uploads/mobile-ecosystem/mobile-ecosystem.022.jpg";
            images[22] = "http://www.hoonio.com/blog/uploads/mobile-ecosystem/mobile-ecosystem.023.jpg";
            images[23] = "http://www.hoonio.com/blog/uploads/mobile-ecosystem/mobile-ecosystem.024.jpg";
            images[24] = "http://www.hoonio.com/blog/uploads/mobile-ecosystem/mobile-ecosystem.025.jpg";
            var index = 0;
            
            function WindowLoaded(evt)
            {
                document.body.onselectstart = function () { return false; };
            }
            function Step(i)
            {
                GoTo(index + i)
            }
            function GoTo(newIndex)
            {
                if(newIndex >= 0 && newIndex < images.length)
                {
                    index = newIndex;
                    document.Slideshow.src = images[index];
                }
            }
