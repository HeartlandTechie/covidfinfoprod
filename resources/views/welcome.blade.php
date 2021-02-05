<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        


        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                  
                   
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-1">
                        <div class="p-6">
                            <div class="flex items-center">
                                  <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                       <g id="_9SOqfD.tif" data-name="9SOqfD.tif"><image id="Layer_0" data-name="Layer 0" width="194" height="194" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAF4AAABeCAYAAACq0qNuAAAACXBIWXMAAAsSAAALEgHS3X78AAAgAElEQVR4Xu2dabQlRZXvf5HnzvNQ1FyAzGIBCo/BBgGlupCpoCgoSqBARLAfCN2IY1uA2CAoICBTga+7lUkaLCZlxpZGUNvuRvG1LpkWUHVrrjvP956T8T5kROSOyMx7L+/D+/T2WudkRsTeO/b+750RkXHynKPYa/XdKD6DJOXeQGtQKjnKdk1SL3nQST2k5axQqksV1Qtdsg+nKuDV2pmbylh5WQ9ePwTtsizrJAlzHU8oo2QFgb8A6s0qIjqBZrQyDaK3PLBDwz0SOjLgUmCkaPcaTL02ZSWqQ94QPHuSK6PTPp0fIYo5HXl2Gr4w4EVkVabdzY+AYeec5XKnBkit8xVroc06ITsA0CF42ui1QRKyClEngmgPCrLZRA4ZRVYGcbQUgu7pNvKejfi4eAHEJ43QL2RS2/ujtNJIhAJatCtA6VSBEp1aeRV2aF5eMAoCJkmRHyTXbuusDcIxGUinV4CaZ4s7ivowIULfEsaUR9ZZPOxB+gxUSfYUZAXd/TA5CSqJjQMCsoC7Sy50XFijJW/A5yiMkKlTojONKausTk1W3s0HEhktirbdnEs/ZZ0TzbMvaHPzjoKOFqgqQayFadoALyMbx6AUe310b9pbGg2b9nU7QAMjdAJcGheFQgsuAbh0BhIslOB2oKZiXrDNScKiBV/Yp6kWLNqz34KEsYHEWwGiCvzMxDGgSClirRkdm+DN9zYxPjYBpSjFTeucjJ+sgNas+8ElLN57QVbr/6cZ0/DgBB8+4WtseOs9aGv22gzw2Uts7z3m8Je3N3HBZXfQ0NmMiiKR92DyAm2yDpFlfs6lWalMOU1mq0NyWk2yBSEbXgrptWXP5YWRq9tldmqrz+v3HPZqzzIWRlAeL9P13lbWXL6S1af8FaUoIr08tBOocnoAN2FpqCpV8c76bbzy8xehpRNKJdGLuNYkBmiS4cbySOWyaOrkEGdFlK1Xfr1FS5Iwwzsv4rHGhvozfJIEvOHcJctKwegEjI7z4UN3o3dHbyoe6lEu400kxKRZrlSoq62Gpk6Y05mMUSFQzhEEKLac9pPKKOR4mtSHcoLHIwmA5TPVXpB1VrfsMwxenqzHo72D57vFI1IwNgFjmi+tOYnVS/fg399NpkuPdOpDumRRGAO1a0z7MHUKY5RwCFsHHui23lvZhE4UyBWRuydA2GrqkxNft9bZPrXlk0hafxB6Qh6y9ikM6JOwfZgLv/BJbrp8Cdt6hxkeLQt9kBSMk9oCnwFQ9qCEY4LXozRYLjCSzQZaBiLMPFm22ez6NSDKgEIKojI8DiDbYcBvhVyQpZHWfvMWJo3s08UjgvFJ2DHEBRccza2X/zU9PUMMDo0TRWGUSPtUcnJ1l2NgNIbZOiabHaC2YNmFvBP1mEkBCA0U9dZJi6kDXxhgM1/y2YI91xo/GMIGW+fFwAbB2IAoY3QpDOjDfP78o7jlsmPY1jeEjjGg67Qb6ZOpM3euQYda+4agSC5zWykMmSzDRBkHgmHPdOqQMUen39aHRQNKBkgh68SEvHdewKct4Eq8JL8MTNhmXuNl2D7E+Z87klsuO4YdAyMMDk2gZKa7uBrbRUKm63jvssLHRukUMxmRcoWOzmZ6ekegbwg6mqAiIu0NSyIwNmvseWb4Mp15PgsQXL3QY7NRXhVBrD3bNXhXSknB9iEYnUwWEn7mpTJaQ20VxPDZ8z7BrZcdQ8/gKINDE0SR8k0Gg6WNlrVPyRsoLZFO38Ps11YRMDDKgQfuxkWnHMhnr32SgQ3dML8tkYxJHbOCAmsPSMBlhWVwzS7iot5TJMDG78OJBv14AdPJ7Xw55pDD92TBTk2MjZd9EUPlWDOnrYGu93vonNPKbV9aQs/gGP1DE5Rkpoey3kSdlNMtg3BCsiTB8IBQoKF7cJTlS/Zm0cLVrPzyw7z7312woC3JGrucCnDy9DggbZAsIHk84FZYti6cTyxZeSWc1lbe8hu/yxWYqHDVZ4/g+CV7M7h9KINEJY5p72yCcsyxX3iAwxfPp6YmYiB3IhVlY66XP7jlpOFwAGknk5JKXlqnR3N4Z0MPB+wxixfXruaopYuhqze5mYhUCoAEzwrKDjzQDL+tLMgJB5wLipG1/NbWkLwkM35HETv6RundOkDXjkE2bk9f67cOoLVm+7YhDv7cj3l+3SsoNOVKnD+8JJ04yPIYBPCCI19TSuLSVmhKSvH+lgFamqp59MbTOf/Co6FnBAbHcLublqzPzqgAVXEfgThN5GywlABYyDqw8R2WfSJ5JAPYbQ6pshJr5nU2UokVJ39tHf/53B+hs4MoirJTkyU7eYftIkH8VU3KkT23ypxDimTpmbSXIsWW7hFGRie4++uf5oZvnQKTMewYFJlvSaDggIQ001MDUx4EUDrNZge+QFqLl+3LTXCSx8r5CNleKrFmbkcD5RiWf/1RfvPsH2FRO0T+fmWIr7zt8ZjckO5lvGlVlisg5d5SXjRahL0UKfqHx3lvcz+XnXkwD95yJq2dzbCxB28c9zJNZIdMIRVY79oEeH4ap032arAsNlBhpge+ykGjEmvmtNdTjhWnf/NxXn32dQO6gUxLOVMVlD2ydhkSn3IQZIF9F+rCzFKgpJMke9HjE2Xe2tDD6UftwQv3nMN+B+wC63vMUlOJfmwGKNxY7cAIQTL9uyWgb0eKn1dISJrtNQkdhlGTrF5mt9dT0RFnrHmcXz3zOiw0oDs4fHiDFDA8+GSDr8OMt1FxfkvDdCockvZPlVLEMfxlfQ/77NLBU3eezXHLDoRNfcm+htspValOL6MtWbDtUfZiT0WAbDA9UiJIFnmrS/Im0MUGdK0jVl35BC8/8weY32o2CSW7309gteERlRJPFa5q5Lky8ZeAZCJIhiyLUsmt8/ub+6mriXjw2lO45KJjoH8U+kaTcd/Tn6MlHHrs4JnxTJFvjCJdfgrALavdHjHlcqyZ1dZApEqsuvIJ/u2p3yf3JVWlIPDTkJ37pJ0y9oSbZIFmBWTGWkj5VfihmE+KBPytPSMMDI9x4999ihuuOhlVVYKtA7jhJUMScFvWpLuRAY+X9U4o5bFPLMg2LdgAYs3c9nooRay84nFesqCXxOelXpLMNAqGpM1aZrwWx0wCKezYlBRt9oWfSWXPFcmkOzgywftbBrj09IN47NbPsNP8DthoPyywYBiAZWp4O6NGoxL1jjUEIgDYAa1FsE2lglJ9NZNlzZlXPslLT/4e5rcnmW49kUkiQPRgcmT9sKSEeUl9+niHqPRZzJl10BoPhOumqXIgUorJcszbXb18+pBdeWHtahYfvDus707uHCOvg4S8vgKFXmcqBUNeQeG6zgbOHjTYq6QyWeHS217kJ+v+Axa2QVWU8ivLLHDAV5MbgPyogHIZLwy2SkMUrRGulyKtCeUFwc5xb3X1suv8Fp69/UxOWXEwbOyDkfFkowoozBgZiAQ10p50fnBCvyxplQR7YhL6RlixZDFjE2aDzI7pHr9QovH05fmaJWOrUSuGGml4jiqXSSYDXBZ8MFIkQ8+GrYNURfDgd5bz1S8dC31j0DOUZr7nqBZlGXzbpgOTTZ0XJMGPTjyfrMDmAVavOowfrTme5oaa5KZPLKmd/DTuquCYKdhkVUlDlFaSKs/tQAcvDAYfHHxIwN/eO8K2vmGuu/RTrL3xDEo11bCl389UEElt+1U57aIuNCnjk0qGt839rFh1GP+85gQGRsfpH5ZXnZXVQjb1O8/tTDfaMoP3EJbWYox3a10n4ZMLjshCpMz0FGotRYqhkQne7urhgpP24+k7VjNvl52SoceBbJitjXIIkJkuwVFKJJFOzbQ6ykmmL195KP+45ngGxybo6R/zt3Yz9wTS7xmSAgFcelBKDDVoYaQSrNYR0bFOQVBCp6Q88/JCpJSiXNb8ZX0PR350Ps/edTaHHbF3ssNZrqT9Ap5WbwmsSPf+LeK2Xooa0Lf0s3zlIfzTFScwMj5BT/9oArrsyjrm1dmC70kAbUYsZdRBxk8ZRGG5zCpJOfIhXJIlzCOboG9v7GfRrEYevel0zjzr47BjCIbsDqeRUqFLwm2Fn5E2BpDMHeUybO7n5NMO4Z/WnMDo+ATd/WPpfrrlDZ8NckXt+pf7OnkWZSARsuCWkyZD7KVsjPdxNu0Wpamj5ZGiIAMCiiLFxh1DaGL+15oT+Pplx8JoGXqHgs0pLZSqtM5memiaUslEuqmPZacdwo+vPJHR8Um6zfCStc3oybNaJ29Teq+DI6SgG7U5Q43sTEY+pysVPh46MyoKgiIZ93v7x9jcM8RV5x/Bj25YSW1DXbLP48Z5I6DxbdakSYRpi6IE9I19LFtxCPdddSIj45N02+EF4ZkEx/qcB553KWUpGzKZGAlHdqjRuA6UYPRImzqdPjk5HWmtqaqKqKqKkFvJeRRFitHxMu9v6eOsT+/Ls3euZuFe8+D97uT23dslBDfRS1wwAZkow8Y+TjrtEO67+iSGJybYIUC3/CaR/QpZ9kgEN5dC6FWgS8uMZwpdsiORYYaKxDx4lWJiskJrUx2N9TVU4mnAV8lO4Rvrezj0I3P55T3ncOSSj8CGnuRxuZI1XWS7zHS7etnUx4krDk5B7/NXLxZwlZZStd6Cwrxykj3jidJkRgJ7pZoJNv0EKgeHNEgq7dhrSQRDUdlqaae2Bp7/zXtcftMLNDXWMru9YVrwAZRSvLOxj/amap64ZRXnfe7I5DGMAbvDiZ8IGh/0Uw/m/m8vY2Ri0oFemF+hniJSU28OFja6+THcj3eJLSUt4IFRbg3tuxFwOk111SU0cP/dv2TlNx5jbKLCznNbKFfCJzt9UiTj/uYdwwyPTXDH3x/HP1yxDCYq0D0kwLcCCioxbOrn+OUHc++3T2J0YpLuvlGqwjGdwHq73LMNwfI6DYy/OVgYSEnBaiv/ztWo8hTmateE4Q1Bt+VKrGmor4G5bfzrE//F8V/8CW9v6GOvnTtcHKeiUqToHRhj0/YB/v7cw3jw5s/Q1N6UTLqSKkmmH3fKQdx79UlMTFbY0ZeO6TMGyRrvsPEKhH6H5hdfVwpQYqhRkH223TaaOnkpzsgDSRqt42TXb1EHf3rtXZZedD9P//v77LGgjaqqiDgHfS2OpUgxPl7hzQ09rDh6L56+czX77rcoudmKdfJc9KY+Pr3sIO6/ehnlSpntfSP+REqO6UoclSijyB9+pskSQH4xQ9ZiRhAx1IQRFcxeYivfMFOY3hQjZMFd2E73ph5O/eID/OMTf2SPBW001dcQ54z7Xhoo0DG83dXLx3bv5Oe3n8mxx+0P2wZgywDHLjuIB759EuVKhR29/pKxyMbMl/ncparTlzexqkxGF+ehFgzKFf0xXjI6MkDLGd4q0NOv4gvbNTCnBXSFi9as42u3v0RnWwOdbfXepCsT0IFnKt/bMkBDXYknbj6DVWccxsc/uS/P3LySibjC1p5h7wkvL5GLKBOdaeEs8M/05on7uiJX6d086cy7izrk8uaZaJ11/oRWxhraG6G5jhtveZ6zr3wSRcSiOc1U4pxv7uH3o4HyZJxkdVVEz5Y+XvrfG2lvqqe2pmra+wUPPKlY+maNz7u5KiIl2CxZW4yeYFUjAQUvTzwU/EyajpwWDzXjVCWGhhqY28oTj/yOU/7uITZsG2b3BW1A8vil7VqGOo41s1rqaG2uZ9W3fsZD97/KG29sYsmF93LvU//N7gvaaKir9uaNECrPdk1wWahsx64uGWqKoTfreOm0DJhyd64CcKEtA6pS+LP7B6WcMFl1ZtL97atvsvRv7uOXr29kr4XtVEXKy9wkVpqOljqaG2s57ztPs+6BX8NOzbCgg3h0jAu//ghXrn2ZWe1NdLamQ1dRkqhMgwTBRkNmeaovV6cHj06z3QVOi1WNi1ABqF6bwo71GuV6nz4cgUPWKXdzpmFRB5vXb2fZxffzo6f/xB4L26mvrXLgxbGmo7mWloY6Pnfdc/z0/t/A3FaoLiU3TR2N0FzLd258ls9+60migqFLUnpfKGCUw5TOHqef3SwJPwV+4qM/W5/GMVe5BciwhbEqNEduXhWRJhn357RSGZvggq/+C1f98BXmzWqhvaWOyckK7U21tDbWc971z/DIfa/A3GaoEV8FjYGGWpjTzLqf/JbjLn0wGboWJkNXOOy7YphY1lR3o+iYzMH3xVObM3p49wbI/XhxO+sLCWOsQRoyn+CnHAUUtLgsx+9b62Tc72iCplquvf5pvnDNUzRUV7Hnh2bR2ljL+dc/y0/vfSVZFdVUCROtwzqp37mD1379Fsdc8GN+8Z8b2HtRO1Ul5Y37zmYPOYNQON8VOCdFra50ualTDlGVfvRnWxQOkEw/dilppXXOZlARaUS6hU4FOpRKboYa62B2E/f9+BWWf2Mdv39zG+ff+DwPP/AqzGs1X4kxjuWlsgIWdbKtawfLLr6PtY+9zm4LO2hqmGKTLgyARdJe6R6pzFmuVjusasOplPiCsYTZy/7iSCetUzQKsn2mJe0HHPDuZBQJ+HU1sKCNf3viNb5RUbz8p65kIq6rhrL4yol8rt6SBohhbiu6d4QvfnMdb2zo4ZoLj6Suportvdm72kAYUGlQw6BQkKAECelUpZxir8ZENS9kGvyxDqHEFyjII9JfMMhhdOcq7csGvJI8DXDksoP4l2tP5tFrl9M0pzV5Ck2p9BlMK2v1ue5U8pRyeyO01HHbD15g9ZrHGZ+MWTS7mVhr940hL8n8TPm/I6fLYCsMnHI/Xot3j0FETu7TSWhzcZUkl6UK/9zqjzV09XLU0v145JpTqKqOOPbQXXnmtrPYc9+FCfiV5GdePNCdfnBL5VhDfQ3Mb+XJJ19j2SU/4c/r+9hjYTuRS2rt67CFcL35QYMiJ1uT3GKMNy+hT4n3xDntBJ1DM6BUT24IcCGT43QcQ1cfRy7dn4euW44qwebuId7d3M/+e+7EU7efxVFLFkNXX/JFX+8TpUCXyzadPCW2oJ3Xf/8uJ13yAM/8+l12WdRJTXWwSSeTIaSZue26BHDDt3mJ5aTkkqcilaygPTdZ4nSn0lnbCo2VzpkO4hg29nHEXy/moeuWU4pgS88IpSgiUor1WwZoa6rhpzes4NxzD4etgzA0Kj6VEplrHbZZGpvkmddG9+Y+lv/tA9z50H+wcHYrjXXVZrIW/GFCFCaPJLGJJv0WEPs/FBSku5Z1Et0geWUxDEJYn22x+nWaqRt7OWLJfjx8/alUlSzo6TReihTbeoZpb6njnjXHs+vCDq7+/nMwMQSdzeZnM3LAh7SPWMPsZugf4eIrH+cPb21LPiipriL1SPsyQJKrhVlkSGwZOHcFYNrbMnAy9s0kt+0cn1TKF5JktX3nLTq8sh1ou3r4q2MW88j1p1JdrdjaPeI+OZKkzAcjXTuGuOLzh/PP319FdV2N+b4V5E7+4ZKzEkNrPTTX8sP7X+Xtrj5oqvF5ZFq5eSnfb0fKZLxktfaYJPDvXC2nSJYMyZ8uAcLlZFEuaNfoLPHLWkNXL4d9ajHrvruC6mrFlh3DlMyzjFKvy71IMTo2ydsbejj3uA/z/D3nsvMec2FDL+4KkpOsJSVOYpI739aGnHZR4bLeR0WWtDhLN8lslRbJID/slsYo4Ww4gdrfNZBai9AWpLxvc7ja5KU1bOjl0E/uy2PfW0FNdcTmHcOFa2xpbqQUlYrmz+928/GPzOOZu8/h0CP3ga4e8QigzVipxATeYllSCRp2DrAC4VXilKQ/lxW2FF4QQpfYj8/h8wq5XWB/42sq8vLEgmmNMJl+6NH78tj3TqOmWrFpx9AUNzZZUioJwFtdvcxtq+OJm1dy+hmHwbbB5Ln7KMKt3LSES1imwYdRKMcEI8zBgNX5aBNT4uL6B3S4jg9DGDY6hWkG5bHnxUFJxxRJAOIYuno47Oh9efSGFdTWRGyaItMtFcW5FCVBi+MKP7ryRC6/dCkMT0DvSP6jINIBeWV4fNbXUM630YNOu7e0wgUuOUauwQTECYUBVu5NNBQgH5Cy71qnGRdr2NjHoUftyyPfPZW62tKMMz3k0OJYihQ9/WNs6x/hmr/5BHdecyrVNVXJZ7LTqzY4CMYAP3cSRF+qdkGQOAHpOC8f4ZMZmQeouUTScgJiOAR6kc8jhVmn93LIkfvw8HdXUF9XYtP2mYGeRyo8RoqRsUnWb+3ngpP352c/OJOO+R3J0wgyTFoA6IYgJdpk9hnGcM7LIaXS/M02JHrFByGWXBSyl7TlEw1TrWry+rXbAAd/Yh8e+d5pNNSX3ESa6S+g1DK/Lo+UmXTf3NDDkQcu4hd3n8MBh+6ePH9ZruD9dK9/QnbL2wYEvMB9UMpMrpoZRRIQWaBAzexpYQ0JrwY29XHAJ/bhp989jcb6UrJkzAF9urKlPKtlnSJ5BHC3uU08f8dZLD/14GSbwU669ur2hXCrHkizH9LEz+nZ2agVKgxeUAwe79BIK7KqhYXuUBww2xJrTW11RBxr9j5iH9bdcBpNjVVsFmN6Xk7l6ZouPfKuiihSrN86AGjuu+5ULrp0SfLt8n476SrcGl1bLZh6oUgkZ17CebaFwTSJanXkfxACqQ2SbLZb40wWTHWxxFrTXF/N4Ogkb2/uZ+2VJ9LZWmvGdLErLcjanFdPTr2HjeCTdaUoYlvvCDv6h7n1S0v4/j8sTxq3DyTgh6uYkBTiarcVRWRuoKQqN8wkR5HxebmSRxL8qfMvjjWN9dUsmNXM/7zxee762WvsvqAl86h0kZa8+uks9HwNyvbLbu9u7ONvV/4PHrn5MzTPak2fv7Tgy6z36sQVMLXryUgQ8mTG+Ex666yQlxA2Q3RaFVAca5oaqlnQ2cwlt73Eo/f8grb6airleMbTSR4VZXTReYZXJd8wf6Orh5MO353n7l7N4gN2Tvb2vS+7WcA16RAhcAmXc5K8YNk6caJkxts7K7TkSjuQ1XY8tO+BDbHWNDZUM7ejmcvueIm1t78ArU00N9ZO+Uy8zjmG3Jr8+rC9iBSJqzrWvL2xl8U7t/Pz285k6XEHwKb+YG9faPKGWQozXoHJ4zB5fZ3+UOOta8leLqFHKju12uFlXkcTX77rJe64/cXkWZeGWvdAqrQ/LylkexFl/FbpIQ+TsL8kAMlvqTXUlXjoulM5/wufTO5yB8WXHiwp91ZoXJCOuXjZ+nAxmzYqE7VMfU4kTFUcJ5k+r6OJr6x9mdvveBE6GpKP3MRPS0sQChLHARi25wKbo6QocJJVkYz7W3tGGBodY+2Xl3LdN0+C8dhMunaPJ5BUZJeLknIjbxIbBUqFy0myFocp6cY2oV2nmT6/o5mv3f0rbrvtxWSrtaGWUGkRqFq8ZkyKXKFc34OjPS9FioHhCd7b0sdXzj6EB76/ioa2pvRnXRxn6vvUy8kc7+x9gXfnapmnCKLjsST6jbWmsb6KBTs189W7X+bWHzwPbXXJw6gu06dVnp/NRWSZhR1TBSzUHaZPpBTjkxXe6url9GP25pm7VrPrPvNhQzf2f1O8AUBoy/Qr5kBR6ZXST6CKSNk3nZYVSVknv0DaWFfN3NmtfPXuX3Hrrc9BW0PyMJKdM3QqpyH8LCUXsKlA1BT4NkMqCnDypyrwxvoeDtxzJ16462wO/9RHkt9WGC8jf8ZRi1cuWZ+zBfKHGns55DZA+ntbCrSmoa6aObNb+MbaX3HLTc8a0E2ma/CWYjqJtPssRZB0Yqqsz1g2BbPU6eRmcEmVIsV7m/tob67lyVtWsfrcI5K9/eGJ1BfSAGZUKoXy5sLUfztn+P8RIsmBY4WM6QZwFFBdRbmiWX31z7n/tmeTp75GJmBoPKuvZ5gtc1pn5DhMzSbbZC4VyRRlZZCHgPOWUhSxuXuYjpY6fvjN49ljQRtX3fw8jNo9nqxWp89gXJwlOvjhftc+VRpZ9RqGxylXYuqrS5x38VKq3OolzQpLldFJdprTQrmSNbgIyDzK8BahSoEend9HeLUl4Ct6B8cYn6yw5vzDWTC3jc9f9Rh0def+pnDqtbnWPAYlyip4vCO8OgBnkrvETJA29vHhAz/EfVecyN67tDMyUSF9Fi7rmo4UlckKW/uGE5tmmPlFIClSR4vap6sL3Q3BB/GBelcv5xy3L/NmN7Hq4gfYtGPI/5H+PPI6FRmi5b/i2IMOmJyLpMfNfex74Id49KaVzOus562NvW7DK4/cNWKToMDeEJyi7JeAF7UX1YUXiOwj1ywNSinKseatrl6OOmABD69dzejQGNt6R/Iksk6ElUoONcrjCkinx4197POxXXnkhtOZ21HP+q2DlCJV+DXJokySDue1T0dFGV0ULEtFWT9TuXc39bP/hzqplGP6h8cKEy4v0V2FVjkZj/aL6FTLpj72+uiurLvhdObPamDDtsEpP64LM6kooz8I4NPRjAMiM6KIx5BMjFKk6B8cA8iA7tRp8xUlK+TqtasTG+IKt1Hm3SyoRHhjD3vutwuP33g6C2Y30jUN6NPRTCSn45HJpNybT2HwHQWZOFXGZ5LDFMQ4IKsBTe5nalaRlp+5emt3baqNqg297Lbfzjx5yxksmN3Ihq0p6JkrSZAO2oMkmxbYD0xTGBPaEtZ9IFsCRVNdJZlWE2Hxrzjg3Q4qwzU0yP7HHMRzt5/F3J0aWb+5n/aWugyInhpxzGsrItmedy6PkN+PLWvSrdep7CwiCVeRTbLdtrU01NDaWEs0OHUo08kVkCqqSyW6tg8Aiq+cdRDvdW3hl7/r94eXAuslONOR54jC+3QtBFtDugwV/Yb9hYGQpE2lzaui5MgDNizn+dnYUMNv/vAOceMuZnNT+0Lenau1wDmlGZ+c5Pij9ufbt19OqaWV360fpaRmoWJlJARkBi1F8mVgFSzScx/zs/yGI6lSKa9EWJs295XNnGjbek06RTkTi2TyKCeyJP17kGty/5Kie0BR1bY7xy05yEHjDVhw3AwAAAHkSURBVOM6MdD8HZGQVECk+O1r73DEx/biiouXMT5hgmXac9fjAi9nntEr773CNNGQ/ghpgV5snc6Ip22SpExevW3LiYX1IZcfYWMBaQ011aBjeH99N5PlitnXJ9Wn7Tre7r+g3PdGT7vktuRvRZXIwv+nlIO0yZbk3LKIOkt5dR5NFcWpqCBa4GWZ5SpXYrr7B6G5IY2o4cv5yzkFEezYtDX5xp2SU9R0KSTqnI1KlLUf5CALiCD9k0d5JOfcKrVkdYuqkE/+vq/XLnjCvq3dYV+yLP/hTdqggKbGJOO9vTALvBacSifOyyh5PAEp94Z/HapURuW1k9UvdaUMWT3SM+8qCPmm4HXNViZkt/z4dlomCa5/YgVS3a7f1P/0gSYFLnLSAa2NgJFQgj8kF+28xqA9jGMGLI2f/aR2JQJZflR+cDwRnegJ/RIqnEjohpWRqq1cymTKFmRrkw1C8opQqtXPeGGIZDbNHiklwDGMHoBSn05lQvIADb0SQfZAMuApgZRTLcDJkBLgqqAu0J/RK8o2iTz/bL8qPXqy5qXUrCpi/oLiIDRDDjiJZQY40sZcwEgBkbwheX1YmXxWj98BZAoZu4QSaZ+rlkHRAeBa6EYcZZtsNyTtsTq1kJcBUtSh9Z//Dzqxj1zcLRoTAAAAAElFTkSuQmCC"/></g>
                    </svg>
                                <div class="ml-4 text-lg leading-7 font-semibold">  <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">NKCSD COVID-19 Vaccination Info</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                   Vaccinations will be provided at specified sites throughout the district thanks to our ongoing partnership with Truman Medical Center (TMC). Once the state approves Phase 1B-Tier 3, which includes all school staff members to receive the vaccine, the district will work with TMC to order supplies based on the number of staff who have made reservations. 
                                    
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                      
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
