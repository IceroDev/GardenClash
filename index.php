<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Garden'Clash</title>
      <meta charset="utf-8" />
      <meta
         name="viewport"
         content="width=device-width,initial-scale=1,user-scalable=no"
         />
      <meta name="title" content="Garden'Clash" />
      <meta property="og:image" content="https://cdn.staffe.net/NLzLNaiJbH.png" />
      <meta name="thumbnail" content="https://cdn.staffe.net/NLzLNaiJbH.png" />
      <meta name="theme-color" content="#844c74" />
      <meta
         name="description"
         content="A turn-based strategic Python console game.
         With wacky characters inspired by the place you call home, your garden. Play
         with your lawnmower, your garden hose and even with the insects that keep the eco
         system running smoothly."
         />
    <link rel="canonical" href="index.html" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:700,700italic%7CInter:400,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <style>
        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        details,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        menu,
        nav,
        output,
        ruby,
        section,
        summary,
        time,
        mark,
        audio,
        video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }

        body {
            line-height: 1;
        }

        ol,
        ul {
            list-style: none;
        }

        blockquote,
        q {
            quotes: none;
        }

        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content: '';
            content: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        body {
            -webkit-text-size-adjust: none
        }

        mark {
            background-color: transparent;
            color: inherit
        }

        input::-moz-focus-inner {
            border: 0;
            padding: 0
        }

        input[type="text"],
        input[type="email"],
        select,
        textarea {
            -moz-appearance: none;
            -webkit-appearance: none;
            -ms-appearance: none;
            appearance: none
        }

        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        body {
            line-height: 1.0;
            min-height: var(--viewport-height);
            min-width: 320px;
            overflow-x: hidden;
            word-wrap: break-word;
            background-color: #272B36;
        }

        body:before {
            background-attachment: scroll;
            content: '';
            display: block;
            height: var(--background-height);
            left: 0;
            pointer-events: none;
            position: fixed;
            top: 0;
            transform: scale(1);
            width: 100vw;
            z-index: 0;
            background-image: url('data:image/svg+xml;charset=utf8,%3Csvg%20width%3D%22640%22%20height%3D%22480%22%20viewBox%3D%220%200%20640%20480%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20preserveAspectRatio%3D%22none%22%3E%20%3Cstyle%20type%3D%22text%2Fcss%22%3E%20line%20%7B%20stroke%3A%20rgba(198,133,214,0.078)%3B%20stroke-width%3A%201.01px%3B%20vector-effect%3A%20non-scaling-stroke%3B%20%7D%20%3C%2Fstyle%3E%20%3Cline%20x1%3D%22704.0%22%20y1%3D%22528.0%22%20x2%3D%22381.9355%22%20y2%3D%22286.4516%22%20opacity%3D%221%22%20%2F%3E%20%3Cline%20x1%3D%22512.0%22%20y1%3D%22528.0%22%20x2%3D%22350.9677%22%20y2%3D%22286.4516%22%20opacity%3D%221%22%20%2F%3E%20%3Cline%20x1%3D%22320.0%22%20y1%3D%22528.0%22%20x2%3D%22320.0%22%20y2%3D%22286.4516%22%20opacity%3D%221%22%20%2F%3E%20%3Cline%20x1%3D%22128.0%22%20y1%3D%22528.0%22%20x2%3D%22289.0323%22%20y2%3D%22286.4516%22%20opacity%3D%221%22%20%2F%3E%20%3Cline%20x1%3D%22-64.0%22%20y1%3D%22528.0%22%20x2%3D%22258.0645%22%20y2%3D%22286.4516%22%20opacity%3D%221%22%20%2F%3E%20%3Cline%20x1%3D%22384.0%22%20y1%3D%22288.0%22%20x2%3D%22256.0%22%20y2%3D%22288.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22384.0%3B386.2069%3B388.5714%3B391.1111%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22288.0%3B289.6552%3B291.4286%3B293.3333%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22256.0%3B253.7931%3B251.4286%3B248.8889%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22288.0%3B289.6552%3B291.4286%3B293.3333%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22391.1111%22%20y1%3D%22293.3333%22%20x2%3D%22248.8889%22%20y2%3D%22293.3333%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22391.1111%3B393.8462%3B396.8%3B400.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22293.3333%3B295.3846%3B297.6%3B300.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22248.8889%3B246.1538%3B243.2%3B240.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22293.3333%3B295.3846%3B297.6%3B300.0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22400.0%22%20y1%3D%22300.0%22%20x2%3D%22240.0%22%20y2%3D%22300.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22400.0%3B403.4783%3B407.2727%3B411.4286%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22300.0%3B302.6087%3B305.4545%3B308.5714%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22240.0%3B236.5217%3B232.7273%3B228.5714%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22300.0%3B302.6087%3B305.4545%3B308.5714%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22411.4286%22%20y1%3D%22308.5714%22%20x2%3D%22228.5714%22%20y2%3D%22308.5714%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22411.4286%3B416.0%3B421.0526%3B426.6667%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22308.5714%3B312.0%3B315.7895%3B320.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22228.5714%3B224.0%3B218.9474%3B213.3333%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22308.5714%3B312.0%3B315.7895%3B320.0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22426.6667%22%20y1%3D%22320.0%22%20x2%3D%22213.3333%22%20y2%3D%22320.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22426.6667%3B432.9412%3B440.0%3B448.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22320.0%3B324.7059%3B330.0%3B336.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22213.3333%3B207.0588%3B200.0%3B192.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22320.0%3B324.7059%3B330.0%3B336.0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22448.0%22%20y1%3D%22336.0%22%20x2%3D%22192.0%22%20y2%3D%22336.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22448.0%3B457.1429%3B467.6923%3B480.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22336.0%3B342.8571%3B350.7692%3B360.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22192.0%3B182.8571%3B172.3077%3B160.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22336.0%3B342.8571%3B350.7692%3B360.0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22480.0%22%20y1%3D%22360.0%22%20x2%3D%22160.0%22%20y2%3D%22360.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22480.0%3B494.5455%3B512.0%3B533.3333%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22360.0%3B370.9091%3B384.0%3B400.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22160.0%3B145.4545%3B128.0%3B106.6667%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22360.0%3B370.9091%3B384.0%3B400.0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22533.3333%22%20y1%3D%22400.0%22%20x2%3D%22106.6667%22%20y2%3D%22400.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22533.3333%3B560.0%3B594.2857%3B640.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22400.0%3B420.0%3B445.7143%3B480.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22106.6667%3B80.0%3B45.7143%3B0.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22400.0%3B420.0%3B445.7143%3B480.0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22640.0%22%20y1%3D%22480.0%22%20x2%3D%220.0%22%20y2%3D%22480.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22640.0%3B704.0%3B704.0%3B704.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22480.0%3B528.0%3B528.0%3B528.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%220.0%3B-64.0%3B-64.0%3B-64.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22480.0%3B528.0%3B528.0%3B528.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22opacity%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%221%3B1%3B0%3B0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22381.9355%22%20y1%3D%22286.4516%22%20x2%3D%22381.9355%22%20y2%3D%22193.5484%22%20%2F%3E%20%3Cline%20x1%3D%22350.9677%22%20y1%3D%22286.4516%22%20x2%3D%22350.9677%22%20y2%3D%22193.5484%22%20%2F%3E%20%3Cline%20x1%3D%22320.0%22%20y1%3D%22286.4516%22%20x2%3D%22320.0%22%20y2%3D%22193.5484%22%20%2F%3E%20%3Cline%20x1%3D%22289.0323%22%20y1%3D%22286.4516%22%20x2%3D%22289.0323%22%20y2%3D%22193.5484%22%20%2F%3E%20%3Cline%20x1%3D%22258.0645%22%20y1%3D%22286.4516%22%20x2%3D%22258.0645%22%20y2%3D%22193.5484%22%20%2F%3E%20%3Cline%20x1%3D%22381.9355%22%20y1%3D%22286.4516%22%20x2%3D%22258.0645%22%20y2%3D%22286.4516%22%20%2F%3E%20%3Cline%20x1%3D%22381.9355%22%20y1%3D%22263.2258%22%20x2%3D%22258.0645%22%20y2%3D%22263.2258%22%20%2F%3E%20%3Cline%20x1%3D%22381.9355%22%20y1%3D%22240.0%22%20x2%3D%22258.0645%22%20y2%3D%22240.0%22%20%2F%3E%20%3Cline%20x1%3D%22381.9355%22%20y1%3D%22216.7742%22%20x2%3D%22258.0645%22%20y2%3D%22216.7742%22%20%2F%3E%20%3Cline%20x1%3D%22381.9355%22%20y1%3D%22193.5484%22%20x2%3D%22258.0645%22%20y2%3D%22193.5484%22%20%2F%3E%20%3Cline%20x1%3D%22-64.0%22%20y1%3D%22528.0%22%20x2%3D%22258.0645%22%20y2%3D%22286.4516%22%20opacity%3D%221%22%20%2F%3E%20%3Cline%20x1%3D%22-64.0%22%20y1%3D%22384.0%22%20x2%3D%22258.0645%22%20y2%3D%22263.2258%22%20opacity%3D%221%22%20%2F%3E%20%3Cline%20x1%3D%22-64.0%22%20y1%3D%22240.0%22%20x2%3D%22258.0645%22%20y2%3D%22240.0%22%20opacity%3D%221%22%20%2F%3E%20%3Cline%20x1%3D%22-64.0%22%20y1%3D%2296.0%22%20x2%3D%22258.0645%22%20y2%3D%22216.7742%22%20opacity%3D%221%22%20%2F%3E%20%3Cline%20x1%3D%22-64.0%22%20y1%3D%22-48.0%22%20x2%3D%22258.0645%22%20y2%3D%22193.5484%22%20opacity%3D%221%22%20%2F%3E%20%3Cline%20x1%3D%22256.0%22%20y1%3D%22288.0%22%20x2%3D%22256.0%22%20y2%3D%22192.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22256.0%3B253.7931%3B251.4286%3B248.8889%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22288.0%3B289.6552%3B291.4286%3B293.3333%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22256.0%3B253.7931%3B251.4286%3B248.8889%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22192.0%3B190.3448%3B188.5714%3B186.6667%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22248.8889%22%20y1%3D%22293.3333%22%20x2%3D%22248.8889%22%20y2%3D%22186.6667%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22248.8889%3B246.1538%3B243.2%3B240.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22293.3333%3B295.3846%3B297.6%3B300.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22248.8889%3B246.1538%3B243.2%3B240.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22186.6667%3B184.6154%3B182.4%3B180.0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22240.0%22%20y1%3D%22300.0%22%20x2%3D%22240.0%22%20y2%3D%22180.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22240.0%3B236.5217%3B232.7273%3B228.5714%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22300.0%3B302.6087%3B305.4545%3B308.5714%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22240.0%3B236.5217%3B232.7273%3B228.5714%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22180.0%3B177.3913%3B174.5455%3B171.4286%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22228.5714%22%20y1%3D%22308.5714%22%20x2%3D%22228.5714%22%20y2%3D%22171.4286%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22228.5714%3B224.0%3B218.9474%3B213.3333%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22308.5714%3B312.0%3B315.7895%3B320.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22228.5714%3B224.0%3B218.9474%3B213.3333%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22171.4286%3B168.0%3B164.2105%3B160.0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22213.3333%22%20y1%3D%22320.0%22%20x2%3D%22213.3333%22%20y2%3D%22160.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22213.3333%3B207.0588%3B200.0%3B192.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22320.0%3B324.7059%3B330.0%3B336.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22213.3333%3B207.0588%3B200.0%3B192.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22160.0%3B155.2941%3B150.0%3B144.0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22192.0%22%20y1%3D%22336.0%22%20x2%3D%22192.0%22%20y2%3D%22144.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22192.0%3B182.8571%3B172.3077%3B160.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22336.0%3B342.8571%3B350.7692%3B360.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22192.0%3B182.8571%3B172.3077%3B160.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22144.0%3B137.1429%3B129.2308%3B120.0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22160.0%22%20y1%3D%22360.0%22%20x2%3D%22160.0%22%20y2%3D%22120.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22160.0%3B145.4545%3B128.0%3B106.6667%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22360.0%3B370.9091%3B384.0%3B400.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22160.0%3B145.4545%3B128.0%3B106.6667%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22120.0%3B109.0909%3B96.0%3B80.0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22106.6667%22%20y1%3D%22400.0%22%20x2%3D%22106.6667%22%20y2%3D%2280.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22106.6667%3B80.0%3B45.7143%3B0.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22400.0%3B420.0%3B445.7143%3B480.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22106.6667%3B80.0%3B45.7143%3B0.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%2280.0%3B60.0%3B34.2857%3B0.0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%220.0%22%20y1%3D%22480.0%22%20x2%3D%220.0%22%20y2%3D%220.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%220.0%3B-64.0%3B-64.0%3B-64.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22480.0%3B528.0%3B528.0%3B528.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%220.0%3B-64.0%3B-64.0%3B-64.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%220.0%3B-48.0%3B-48.0%3B-48.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22opacity%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%221%3B1%3B0%3B0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22-64.0%22%20y1%3D%22-48.0%22%20x2%3D%22258.0645%22%20y2%3D%22193.5484%22%20opacity%3D%221%22%20%2F%3E%20%3Cline%20x1%3D%22128.0%22%20y1%3D%22-48.0%22%20x2%3D%22289.0323%22%20y2%3D%22193.5484%22%20opacity%3D%221%22%20%2F%3E%20%3Cline%20x1%3D%22320.0%22%20y1%3D%22-48.0%22%20x2%3D%22320.0%22%20y2%3D%22193.5484%22%20opacity%3D%221%22%20%2F%3E%20%3Cline%20x1%3D%22512.0%22%20y1%3D%22-48.0%22%20x2%3D%22350.9677%22%20y2%3D%22193.5484%22%20opacity%3D%221%22%20%2F%3E%20%3Cline%20x1%3D%22704.0%22%20y1%3D%22-48.0%22%20x2%3D%22381.9355%22%20y2%3D%22193.5484%22%20opacity%3D%221%22%20%2F%3E%20%3Cline%20x1%3D%22256.0%22%20y1%3D%22192.0%22%20x2%3D%22384.0%22%20y2%3D%22192.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22256.0%3B253.7931%3B251.4286%3B248.8889%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22192.0%3B190.3448%3B188.5714%3B186.6667%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22384.0%3B386.2069%3B388.5714%3B391.1111%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22192.0%3B190.3448%3B188.5714%3B186.6667%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22248.8889%22%20y1%3D%22186.6667%22%20x2%3D%22391.1111%22%20y2%3D%22186.6667%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22248.8889%3B246.1538%3B243.2%3B240.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22186.6667%3B184.6154%3B182.4%3B180.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22391.1111%3B393.8462%3B396.8%3B400.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22186.6667%3B184.6154%3B182.4%3B180.0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22240.0%22%20y1%3D%22180.0%22%20x2%3D%22400.0%22%20y2%3D%22180.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22240.0%3B236.5217%3B232.7273%3B228.5714%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22180.0%3B177.3913%3B174.5455%3B171.4286%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22400.0%3B403.4783%3B407.2727%3B411.4286%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22180.0%3B177.3913%3B174.5455%3B171.4286%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22228.5714%22%20y1%3D%22171.4286%22%20x2%3D%22411.4286%22%20y2%3D%22171.4286%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22228.5714%3B224.0%3B218.9474%3B213.3333%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22171.4286%3B168.0%3B164.2105%3B160.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22411.4286%3B416.0%3B421.0526%3B426.6667%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22171.4286%3B168.0%3B164.2105%3B160.0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22213.3333%22%20y1%3D%22160.0%22%20x2%3D%22426.6667%22%20y2%3D%22160.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22213.3333%3B207.0588%3B200.0%3B192.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22160.0%3B155.2941%3B150.0%3B144.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22426.6667%3B432.9412%3B440.0%3B448.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22160.0%3B155.2941%3B150.0%3B144.0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22192.0%22%20y1%3D%22144.0%22%20x2%3D%22448.0%22%20y2%3D%22144.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22192.0%3B182.8571%3B172.3077%3B160.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22144.0%3B137.1429%3B129.2308%3B120.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22448.0%3B457.1429%3B467.6923%3B480.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22144.0%3B137.1429%3B129.2308%3B120.0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22160.0%22%20y1%3D%22120.0%22%20x2%3D%22480.0%22%20y2%3D%22120.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22160.0%3B145.4545%3B128.0%3B106.6667%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22120.0%3B109.0909%3B96.0%3B80.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22480.0%3B494.5455%3B512.0%3B533.3333%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22120.0%3B109.0909%3B96.0%3B80.0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22106.6667%22%20y1%3D%2280.0%22%20x2%3D%22533.3333%22%20y2%3D%2280.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22106.6667%3B80.0%3B45.7143%3B0.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%2280.0%3B60.0%3B34.2857%3B0.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22533.3333%3B560.0%3B594.2857%3B640.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%2280.0%3B60.0%3B34.2857%3B0.0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%220.0%22%20y1%3D%220.0%22%20x2%3D%22640.0%22%20y2%3D%220.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%220.0%3B-64.0%3B-64.0%3B-64.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%220.0%3B-48.0%3B-48.0%3B-48.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22640.0%3B704.0%3B704.0%3B704.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%220.0%3B-48.0%3B-48.0%3B-48.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22opacity%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%221%3B1%3B0%3B0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22704.0%22%20y1%3D%22-48.0%22%20x2%3D%22381.9355%22%20y2%3D%22193.5484%22%20opacity%3D%221%22%20%2F%3E%20%3Cline%20x1%3D%22704.0%22%20y1%3D%2296.0%22%20x2%3D%22381.9355%22%20y2%3D%22216.7742%22%20opacity%3D%221%22%20%2F%3E%20%3Cline%20x1%3D%22704.0%22%20y1%3D%22240.0%22%20x2%3D%22381.9355%22%20y2%3D%22240.0%22%20opacity%3D%221%22%20%2F%3E%20%3Cline%20x1%3D%22704.0%22%20y1%3D%22384.0%22%20x2%3D%22381.9355%22%20y2%3D%22263.2258%22%20opacity%3D%221%22%20%2F%3E%20%3Cline%20x1%3D%22704.0%22%20y1%3D%22528.0%22%20x2%3D%22381.9355%22%20y2%3D%22286.4516%22%20opacity%3D%221%22%20%2F%3E%20%3Cline%20x1%3D%22384.0%22%20y1%3D%22192.0%22%20x2%3D%22384.0%22%20y2%3D%22288.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22384.0%3B386.2069%3B388.5714%3B391.1111%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22192.0%3B190.3448%3B188.5714%3B186.6667%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22384.0%3B386.2069%3B388.5714%3B391.1111%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22288.0%3B289.6552%3B291.4286%3B293.3333%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22391.1111%22%20y1%3D%22186.6667%22%20x2%3D%22391.1111%22%20y2%3D%22293.3333%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22391.1111%3B393.8462%3B396.8%3B400.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22186.6667%3B184.6154%3B182.4%3B180.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22391.1111%3B393.8462%3B396.8%3B400.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22293.3333%3B295.3846%3B297.6%3B300.0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22400.0%22%20y1%3D%22180.0%22%20x2%3D%22400.0%22%20y2%3D%22300.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22400.0%3B403.4783%3B407.2727%3B411.4286%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22180.0%3B177.3913%3B174.5455%3B171.4286%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22400.0%3B403.4783%3B407.2727%3B411.4286%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22300.0%3B302.6087%3B305.4545%3B308.5714%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22411.4286%22%20y1%3D%22171.4286%22%20x2%3D%22411.4286%22%20y2%3D%22308.5714%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22411.4286%3B416.0%3B421.0526%3B426.6667%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22171.4286%3B168.0%3B164.2105%3B160.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22411.4286%3B416.0%3B421.0526%3B426.6667%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22308.5714%3B312.0%3B315.7895%3B320.0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22426.6667%22%20y1%3D%22160.0%22%20x2%3D%22426.6667%22%20y2%3D%22320.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22426.6667%3B432.9412%3B440.0%3B448.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22160.0%3B155.2941%3B150.0%3B144.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22426.6667%3B432.9412%3B440.0%3B448.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22320.0%3B324.7059%3B330.0%3B336.0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22448.0%22%20y1%3D%22144.0%22%20x2%3D%22448.0%22%20y2%3D%22336.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22448.0%3B457.1429%3B467.6923%3B480.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22144.0%3B137.1429%3B129.2308%3B120.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22448.0%3B457.1429%3B467.6923%3B480.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22336.0%3B342.8571%3B350.7692%3B360.0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22480.0%22%20y1%3D%22120.0%22%20x2%3D%22480.0%22%20y2%3D%22360.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22480.0%3B494.5455%3B512.0%3B533.3333%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22120.0%3B109.0909%3B96.0%3B80.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22480.0%3B494.5455%3B512.0%3B533.3333%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22360.0%3B370.9091%3B384.0%3B400.0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22533.3333%22%20y1%3D%2280.0%22%20x2%3D%22533.3333%22%20y2%3D%22400.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22533.3333%3B560.0%3B594.2857%3B640.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%2280.0%3B60.0%3B34.2857%3B0.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22533.3333%3B560.0%3B594.2857%3B640.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22400.0%3B420.0%3B445.7143%3B480.0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22640.0%22%20y1%3D%220.0%22%20x2%3D%22640.0%22%20y2%3D%22480.0%22%20opacity%3D%221%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22640.0%3B704.0%3B704.0%3B704.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%220.0%3B-48.0%3B-48.0%3B-48.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22640.0%3B704.0%3B704.0%3B704.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22480.0%3B528.0%3B528.0%3B528.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22opacity%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%221%3B1%3B0%3B0%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22381.9355%22%20y1%3D%22286.4516%22%20x2%3D%22258.0645%22%20y2%3D%22286.4516%22%20opacity%3D%220%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22381.9355%3B381.9355%3B381.9355%3B384.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22286.4516%3B286.4516%3B286.4516%3B288.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22258.0645%3B258.0645%3B258.0645%3B256.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22286.4516%3B286.4516%3B286.4516%3B288.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22opacity%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%220%3B0%3B1%3B1%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22258.0645%22%20y1%3D%22286.4516%22%20x2%3D%22258.0645%22%20y2%3D%22193.5484%22%20opacity%3D%220%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22258.0645%3B258.0645%3B258.0645%3B256.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22286.4516%3B286.4516%3B286.4516%3B288.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22258.0645%3B258.0645%3B258.0645%3B256.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22193.5484%3B193.5484%3B193.5484%3B192.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22opacity%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%220%3B0%3B1%3B1%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22258.0645%22%20y1%3D%22193.5484%22%20x2%3D%22381.9355%22%20y2%3D%22193.5484%22%20opacity%3D%220%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22258.0645%3B258.0645%3B258.0645%3B256.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22193.5484%3B193.5484%3B193.5484%3B192.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22381.9355%3B381.9355%3B381.9355%3B384.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22193.5484%3B193.5484%3B193.5484%3B192.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22opacity%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%220%3B0%3B1%3B1%22%20%2F%3E%20%3C%2Fline%3E%20%3Cline%20x1%3D%22381.9355%22%20y1%3D%22193.5484%22%20x2%3D%22381.9355%22%20y2%3D%22286.4516%22%20opacity%3D%220%22%3E%20%3Canimate%20attributeName%3D%22x1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22381.9355%3B381.9355%3B381.9355%3B384.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y1%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22193.5484%3B193.5484%3B193.5484%3B192.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22x2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22381.9355%3B381.9355%3B381.9355%3B384.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22y2%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%22286.4516%3B286.4516%3B286.4516%3B288.0%22%20%2F%3E%20%3Canimate%20attributeName%3D%22opacity%22%20dur%3D%221s%22%20repeatCount%3D%22indefinite%22%20values%3D%220%3B0%3B1%3B1%22%20%2F%3E%20%3C%2Fline%3E%3C%2Fsvg%3E');
            background-size: 100% 150%;
            background-position: center;
            background-repeat: no-repeat;
        }

        body:after {
            background-color: #272B36;
            content: '';
            display: block;
            height: 100%;
            left: 0;
            opacity: 0;
            position: fixed;
            top: 0;
            transform: scale(1);
            transition: opacity 1s ease-in-out 0.25s, visibility 1s 0.25s;
            visibility: hidden;
            width: 100%;
            z-index: 1;
        }

        body.is-loading:after {
            opacity: 1;
            visibility: visible;
        }

        :root {
            --background-height: 100vh;
            --site-language-alignment: left;
            --site-language-direction: ltr;
            --site-language-flex-alignment: flex-start;
            --viewport-height: 100vh;
        }

        html {
            font-size: 18pt;
        }

        u {
            text-decoration: underline;
        }

        strong {
            color: inherit;
            font-weight: bolder;
        }

        em {
            font-style: italic;
        }

        code {
            background-color: rgba(144, 144, 144, 0.25);
            border-radius: 0.25em;
            font-family: 'Lucida Console', 'Courier New', monospace;
            font-size: 0.9em;
            font-weight: normal;
            letter-spacing: 0;
            margin: 0 0.25em;
            padding: 0.25em 0.5em;
            text-indent: 0;
        }

        mark {
            background-color: rgba(144, 144, 144, 0.25);
        }

        s {
            text-decoration: line-through;
        }

        sub {
            font-size: smaller;
            vertical-align: sub;
        }

        sup {
            font-size: smaller;
            vertical-align: super;
        }

        a {
            color: inherit;
            text-decoration: underline;
            transition: color 0.25s ease;
        }

        #wrapper {
            -webkit-overflow-scrolling: touch;
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: var(--viewport-height);
            overflow: hidden;
            position: relative;
            z-index: 2;
        }

        #main {
            --alignment: center;
            --flex-alignment: center;
            --border-radius-tl: 0;
            --border-radius-tr: 0;
            --border-radius-br: 0;
            --border-radius-bl: 0;
            align-items: center;
            display: flex;
            flex-grow: 0;
            flex-shrink: 0;
            justify-content: center;
            max-width: 100%;
            position: relative;
            text-align: var(--alignment);
            z-index: 1;
            transition: opacity 0.5s ease 0s, transform 0.5s ease 0s;
        }

        #main>.inner {
            --padding-horizontal: 4rem;
            --padding-vertical: 4rem;
            --spacing: 1.75rem;
            --width: 70rem;
            border-radius: var(--border-radius-tl) var(--border-radius-tr) var(--border-radius-br) var(--border-radius-bl);
            max-width: 100%;
            position: relative;
            width: var(--width);
            z-index: 1;
            padding: var(--padding-vertical) var(--padding-horizontal);
        }

        #main>.inner>* {
            margin-top: var(--spacing);
            margin-bottom: var(--spacing);
        }

        #main>.inner> :first-child {
            margin-top: 0 !important;
        }

        #main>.inner> :last-child {
            margin-bottom: 0 !important;
        }

        #main>.inner>.full {
            margin-left: calc(var(--padding-horizontal) * -1);
            max-width: calc(100% + calc(var(--padding-horizontal) * 2) + 0.4725px);
            width: calc(100% + calc(var(--padding-horizontal) * 2) + 0.4725px);
        }

        #main>.inner>.full:first-child {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
            margin-top: calc(var(--padding-vertical) * -1) !important;
        }

        #main>.inner>.full:last-child {
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit;
            margin-bottom: calc(var(--padding-vertical) * -1) !important;
        }

        #main>.inner>.full.screen {
            border-radius: 0 !important;
            max-width: 100vw;
            position: relative;
            width: 100vw;
            left: 50%;
            margin-left: -50vw;
            right: auto;
        }

        body.is-loading #main {
            opacity: 0;
            transform: translateY(0.375rem);
        }

        body.is-instant #main,
        body.is-instant #main>.inner>*,
        body.is-instant #main>.inner>section>* {
            transition: none !important;
        }

        body.is-instant:after {
            display: none !important;
            transition: none !important;
        }

        .container {
            position: relative;
        }

        .container>.wrapper {
            vertical-align: top;
            position: relative;
            max-width: 100%;
            border-radius: inherit;
        }

        .container>.wrapper>.inner {
            vertical-align: top;
            position: relative;
            max-width: 100%;
            border-radius: inherit;
            text-align: var(--alignment);
        }

        #main .container.full:first-child>.wrapper {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        #main .container.full:last-child>.wrapper {
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        #main .container.full:first-child>.wrapper>.inner {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        #main .container.full:last-child>.wrapper>.inner {
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        .container.style3 {
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: center;
            background-color: #2F3340;
            background-image: url('');
            background-size: 702px;
            background-position: center;
            background-repeat: repeat;
            border-radius: 1rem;
        }

        .container.style3:not(:first-child) {
            margin-top: 0rem !important;
        }

        .container.style3:not(:last-child) {
            margin-bottom: 0rem !important;
        }

        .container.style3>.wrapper>.inner {
            --gutters: 3rem;
            --padding-horizontal: 3rem;
            --padding-vertical: 4rem;
            padding: var(--padding-vertical) var(--padding-horizontal);
        }

        .container.style3>.wrapper {
            max-width: 100%;
            width: 100%;
        }

        .container.style3.default>.wrapper>.inner>* {
            margin-bottom: var(--spacing);
            margin-top: var(--spacing);
        }

        .container.style3.default>.wrapper>.inner>*:first-child {
            margin-top: 0 !important;
        }

        .container.style3.default>.wrapper>.inner>*:last-child {
            margin-bottom: 0 !important;
        }

        .container.style3.columns>.wrapper>.inner {
            flex-wrap: wrap;
            display: flex;
            align-items: center;
        }

        .container.style3.columns>.wrapper>.inner>* {
            flex-grow: 0;
            flex-shrink: 0;
            max-width: 100%;
            text-align: var(--alignment);
            padding: 0 0 0 var(--gutters);
        }

        .container.style3.columns>.wrapper>.inner>*>* {
            margin-bottom: var(--spacing);
            margin-top: var(--spacing);
        }

        .container.style3.columns>.wrapper>.inner>*>*:first-child {
            margin-top: 0 !important;
        }

        .container.style3.columns>.wrapper>.inner>*>*:last-child {
            margin-bottom: 0 !important;
        }

        .container.style3.columns>.wrapper>.inner>*:first-child {
            margin-left: calc(var(--gutters) * -1);
        }

        .container.style3.default>.wrapper>.inner>.full {
            margin-left: calc(var(--padding-horizontal) * -1);
            max-width: none;
            width: calc(100% + (var(--padding-horizontal) * 2) + 0.4725px);
        }

        .container.style3.default>.wrapper>.inner>.full:first-child {
            margin-top: calc(var(--padding-vertical) * -1) !important;
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        .container.style3.default>.wrapper>.inner>.full:last-child {
            margin-bottom: calc(var(--padding-vertical) * -1) !important;
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        .container.style3.columns>.wrapper>.inner>div>.full {
            margin-left: calc(var(--gutters) * -0.5);
            max-width: none;
            width: calc(100% + var(--gutters) + 0.4725px);
        }

        .container.style3.columns>.wrapper>.inner>div:first-child>.full {
            margin-left: calc(var(--padding-horizontal) * -1);
            width: calc(100% + var(--padding-horizontal) + calc(var(--gutters) * 0.5) + 0.4725px);
        }

        .container.style3.columns>.wrapper>.inner>div:last-child>.full {
            width: calc(100% + var(--padding-horizontal) + calc(var(--gutters) * 0.5) + 0.4725px);
        }

        .container.style3.columns>.wrapper>.inner>div>.full:first-child {
            margin-top: calc(var(--padding-vertical) * -1) !important;
        }

        .container.style3.columns>.wrapper>.inner>div>.full:last-child {
            margin-bottom: calc(var(--padding-vertical) * -1) !important;
        }

        .container.style3.columns>.wrapper>.inner>.full {
            align-self: stretch;
        }

        .container.style3.columns>.wrapper>.inner>.full:first-child {
            border-bottom-left-radius: inherit;
            border-top-left-radius: inherit;
        }

        .container.style3.columns>.wrapper>.inner>.full:last-child {
            border-bottom-right-radius: inherit;
            border-top-right-radius: inherit;
        }

        .container.style3.columns>.wrapper>.inner>.full>.full:first-child:last-child {
            border-radius: inherit;
            height: calc(100% + (var(--padding-vertical) * 2));
        }

        .container.style3.columns>.wrapper>.inner>.full>.full:first-child:last-child>* {
            border-radius: inherit;
            height: 100%;
            position: absolute;
            width: 100%;
        }

        .container.style2 {
            --alignment: center;
            --flex-alignment: center;
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: center;
            background-color: #2F3340;
            background-image: url('');
            background-size: 256px;
            background-position: center;
            background-repeat: repeat;
            border-radius: 1rem;
        }

        .container.style2:not(:first-child) {
            margin-top: 0rem !important;
        }

        .container.style2:not(:last-child) {
            margin-bottom: 0rem !important;
        }

        .container.style2>.wrapper>.inner {
            --gutters: 3rem;
            --padding-horizontal: 3rem;
            --padding-vertical: 3rem;
            padding: var(--padding-vertical) var(--padding-horizontal);
        }

        .container.style2>.wrapper {
            max-width: 100%;
            width: 100%;
        }

        .container.style2.default>.wrapper>.inner>* {
            margin-bottom: var(--spacing);
            margin-top: var(--spacing);
        }

        .container.style2.default>.wrapper>.inner>*:first-child {
            margin-top: 0 !important;
        }

        .container.style2.default>.wrapper>.inner>*:last-child {
            margin-bottom: 0 !important;
        }

        .container.style2.columns>.wrapper>.inner {
            flex-wrap: wrap;
            display: flex;
            align-items: center;
        }

        .container.style2.columns>.wrapper>.inner>* {
            flex-grow: 0;
            flex-shrink: 0;
            max-width: 100%;
            text-align: var(--alignment);
            padding: 0 0 0 var(--gutters);
        }

        .container.style2.columns>.wrapper>.inner>*>* {
            margin-bottom: var(--spacing);
            margin-top: var(--spacing);
        }

        .container.style2.columns>.wrapper>.inner>*>*:first-child {
            margin-top: 0 !important;
        }

        .container.style2.columns>.wrapper>.inner>*>*:last-child {
            margin-bottom: 0 !important;
        }

        .container.style2.columns>.wrapper>.inner>*:first-child {
            margin-left: calc(var(--gutters) * -1);
        }

        .container.style2.default>.wrapper>.inner>.full {
            margin-left: calc(var(--padding-horizontal) * -1);
            max-width: none;
            width: calc(100% + (var(--padding-horizontal) * 2) + 0.4725px);
        }

        .container.style2.default>.wrapper>.inner>.full:first-child {
            margin-top: calc(var(--padding-vertical) * -1) !important;
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        .container.style2.default>.wrapper>.inner>.full:last-child {
            margin-bottom: calc(var(--padding-vertical) * -1) !important;
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        .container.style2.columns>.wrapper>.inner>div>.full {
            margin-left: calc(var(--gutters) * -0.5);
            max-width: none;
            width: calc(100% + var(--gutters) + 0.4725px);
        }

        .container.style2.columns>.wrapper>.inner>div:first-child>.full {
            margin-left: calc(var(--padding-horizontal) * -1);
            width: calc(100% + var(--padding-horizontal) + calc(var(--gutters) * 0.5) + 0.4725px);
        }

        .container.style2.columns>.wrapper>.inner>div:last-child>.full {
            width: calc(100% + var(--padding-horizontal) + calc(var(--gutters) * 0.5) + 0.4725px);
        }

        .container.style2.columns>.wrapper>.inner>div>.full:first-child {
            margin-top: calc(var(--padding-vertical) * -1) !important;
        }

        .container.style2.columns>.wrapper>.inner>div>.full:last-child {
            margin-bottom: calc(var(--padding-vertical) * -1) !important;
        }

        .container.style2.columns>.wrapper>.inner>.full {
            align-self: stretch;
        }

        .container.style2.columns>.wrapper>.inner>.full:first-child {
            border-bottom-left-radius: inherit;
            border-top-left-radius: inherit;
        }

        .container.style2.columns>.wrapper>.inner>.full:last-child {
            border-bottom-right-radius: inherit;
            border-top-right-radius: inherit;
        }

        .container.style2.columns>.wrapper>.inner>.full>.full:first-child:last-child {
            border-radius: inherit;
            height: calc(100% + (var(--padding-vertical) * 2));
        }

        .container.style2.columns>.wrapper>.inner>.full>.full:first-child:last-child>* {
            border-radius: inherit;
            height: 100%;
            position: absolute;
            width: 100%;
        }

        #container03>.wrapper>.inner> :nth-child(1) {
            width: calc(50% + 1.5rem);
        }

        #container03>.wrapper>.inner> :nth-child(2) {
            width: calc(50% + 1.5rem);
        }

        #container04>.wrapper>.inner> :nth-child(1) {
            width: calc(50% + 1.5rem);
        }

        #container04>.wrapper>.inner> :nth-child(2) {
            width: calc(50% + 1.5rem);
        }

        hr {
            border: 0;
            padding: 0;
            position: relative;
            width: 100%;
        }

        hr:before {
            content: '';
            display: inline-block;
            max-width: 100%;
            vertical-align: middle;
        }

        hr.style1:not(:first-child) {
            margin-top: 0rem !important;
        }

        hr.style1:not(:last-child) {
            margin-bottom: 0rem !important;
        }

        hr.style1:before {
            height: 8rem;
            border-left: dotted 7px #C685D6;
            width: 7px;
        }

        h1,
        h2,
        h3,
        p {
            direction: var(--site-language-direction);
            position: relative;
        }

        h1 span.p,
        h2 span.p,
        h3 span.p,
        p span.p {
            display: block;
            position: relative;
        }

        h1 span[style],
        h2 span[style],
        h3 span[style],
        p span[style],
        h1 strong,
        h2 strong,
        h3 strong,
        p strong,
        h1 a,
        h2 a,
        h3 a,
        p a,
        h1 code,
        h2 code,
        h3 code,
        p code,
        h1 mark,
        h2 mark,
        h3 mark,
        p mark {
            -webkit-text-fill-color: currentcolor;
        }

        h1.style1,
        h2.style1,
        h3.style1,
        p.style1 {
            color: #FF7A7A;
            font-family: 'Poppins', sans-serif;
            font-size: 2.5em;
            line-height: 1.375;
            font-weight: 700;
            background-image: linear-gradient(45deg, #695EE6 0%, #FF7A7A 85%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        h1.style1 mark,
        h2.style1 mark,
        h3.style1 mark,
        p.style1 mark {
            color: #A1A1A1;
            background-color: transparent;
        }

        h1.style1 a,
        h2.style1 a,
        h3.style1 a,
        p.style1 a {
            text-decoration: none;
        }

        h1.style1 a:hover,
        h2.style1 a:hover,
        h3.style1 a:hover,
        p.style1 a:hover {
            text-decoration: underline;
        }

        h1.style1,
        h2.style1,
        h3.style1,
        p.style1 span.p:nth-child(n + 2) {
            margin-top: 1rem;
            -webkit-text-fill-color: currentcolor;
        }

        h1.style1,
        h2.style1,
        h3.style1,
        p.style1 span.p {
            background-image: linear-gradient(45deg, #695EE6 0%, #FF7A7A 85%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent !important;
        }

        h1.style4,
        h2.style4,
        h3.style4,
        p.style4 {
            color: rgba(255, 255, 255, 0.588);
            font-family: 'Inter', sans-serif;
            font-size: 1em;
            line-height: 1.875;
            font-weight: 400;
        }

        h1.style4 mark,
        h2.style4 mark,
        h3.style4 mark,
        p.style4 mark {
            color: #5F3FBA;
            background-color: transparent;
        }

        h1.style4 a,
        h2.style4 a,
        h3.style4 a,
        p.style4 a {
            text-decoration: none;
        }

        h1.style4 a:hover,
        h2.style4 a:hover,
        h3.style4 a:hover,
        p.style4 a:hover {
            text-decoration: underline;
        }

        h1.style4,
        h2.style4,
        h3.style4,
        p.style4 span.p:nth-child(n + 2) {
            margin-top: 1rem;
        }

        h1.style2,
        h2.style2,
        h3.style2,
        p.style2 {
            color: #FF7A7A;
            font-family: 'Poppins', sans-serif;
            font-size: 4.5em;
            line-height: 1.25;
            font-weight: 700;
            background-image: linear-gradient(45deg, #695EE6 0%, #FF7A7A 85%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        h1.style2 mark,
        h2.style2 mark,
        h3.style2 mark,
        p.style2 mark {
            color: #A1A1A1;
            background-color: transparent;
        }

        h1.style2 a,
        h2.style2 a,
        h3.style2 a,
        p.style2 a {
            text-decoration: none;
        }

        h1.style2 a:hover,
        h2.style2 a:hover,
        h3.style2 a:hover,
        p.style2 a:hover {
            text-decoration: underline;
        }

        h1.style2,
        h2.style2,
        h3.style2,
        p.style2 span.p:nth-child(n + 2) {
            margin-top: 1rem;
            -webkit-text-fill-color: currentcolor;
        }

        h1.style2,
        h2.style2,
        h3.style2,
        p.style2 span.p {
            background-image: linear-gradient(45deg, #695EE6 0%, #FF7A7A 85%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent !important;
        }

        .image {
            display: block;
            line-height: 0;
            max-width: 100%;
            position: relative;
        }

        .image .frame {
            -webkit-backface-visibility: hidden;
            -webkit-transform: translate3d(0, 0, 0);
            display: inline-block;
            max-width: 100%;
            overflow: hidden;
            vertical-align: top;
            width: 100%;
        }

        .image .frame img {
            border-radius: 0 !important;
            max-width: 100%;
            vertical-align: top;
            width: inherit;
        }

        .image.full .frame {
            display: block;
        }

        .image.full:first-child .frame {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        .image.full:last-child .frame {
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        .image.style3:not(:first-child) {
            margin-top: 3rem !important;
        }

        .image.style3:not(:last-child) {
            margin-bottom: 3rem !important;
        }

        .image.style3 .frame {
            width: 100vw;
            height: 25rem;
            border-radius: 1rem;
            border-color: #C685D6;
            border-style: solid;
            border-width: 10px;
            box-shadow: 0rem 0rem 0rem 0.75rem #3E4352;
            transition: none;
        }

        .image.style3 .frame img:first-child {
            border-radius: calc(1rem - 10px) !important;
        }

        .image.style3 img {
            height: 100% !important;
            object-fit: cover;
            object-position: center;
            width: 100% !important;
        }

        .image.style3 .frame img {
            transition: none;
        }

        .image.style1 .frame {
            width: 9rem;
            border-radius: 100%;
            border-color: #C685D6;
            border-style: solid;
            border-width: 10px;
            box-shadow: 0rem 0rem 0rem 0.75rem #3E4352;
            transition: none;
        }

        .image.style1 .frame img {
            transition: none;
        }

        .buttons {
            cursor: default;
            display: flex;
            justify-content: var(--flex-alignment);
            letter-spacing: 0;
            padding: 0;
        }

        .buttons li {
            max-width: 100%;
        }

        .buttons li a {
            align-items: center;
            justify-content: center;
            max-width: 100%;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            white-space: nowrap;
        }

        .buttons.style1 {
            gap: 0rem;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .buttons.style1 li a {
            display: flex;
            width: auto;
            height: 4rem;
            line-height: 4rem;
            padding: 0 2rem;
            vertical-align: middle;
            text-transform: uppercase;
            font-family: 'Inter', sans-serif;
            letter-spacing: 0.25rem;
            padding-left: calc(0.25rem + 2rem);
            font-size: 0.75em;
            font-weight: 700;
            border-radius: 2rem;
            flex-direction: row-reverse;
            justify-content: flex-end;
            transition: transform 0.25s ease, color 0.25s ease, background-color 0.25s ease, border-color 0.25s ease;
        }

        .buttons.style1 li a svg {
            display: block;
            fill: rgba(255, 255, 255, 0.588);
            height: 100%;
            min-width: 18px;
            width: 1.875em;
            flex-grow: 0;
            flex-shrink: 0;
            margin-left: 0.5em;
            margin-right: calc(-0.125em + 0.25rem);
            transition: fill 0.25s ease;
        }

        .buttons.style1 li a .label {
            direction: var(--site-language-direction);
            flex-grow: 1;
            flex-shrink: 1;
            text-align: left;
            width: 100%;
        }

        .buttons.style1 .button {
            background-color: #3E4352;
            color: rgba(255, 255, 255, 0.588);
        }

        .buttons.style1 .button svg {
            fill: #C685D6;
        }

        .buttons.style1 li a:hover {
            transform: scale(1.0775);
        }

        .icons {
            display: flex;
            flex-wrap: wrap;
            justify-content: var(--flex-alignment);
            letter-spacing: 0;
            padding: 0;
        }

        .icons li {
            position: relative;
            z-index: 1;
        }

        .icons li a {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .icons li a svg {
            display: block;
            position: relative;
        }

        .icons li a+svg {
            display: block;
            height: 100%;
            left: 0;
            pointer-events: none;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: -1;
        }

        .icons li a .label {
            display: none;
        }

        .icons.style1 {
            font-size: 1.875em;
            gap: 0.75rem;
        }

        .icons.style1 li a {
            border-radius: 100%;
            height: 2em;
            width: 2em;
            transition: transform 0.25s ease, color 0.25s ease, background-color 0.25s ease, border-color 0.25s ease;
        }

        .icons.style1 li a svg {
            height: 60%;
            width: 60%;
            transition: fill 0.25s ease;
        }

        .icons.style1 a {
            background-color: #3E4352;
        }

        .icons.style1 a svg {
            fill: #C685D6;
        }

        .icons.style1 li a+svg {
            transition: transform 0.25s ease, fill 0.25s ease, stroke 0.25s ease;
        }

        .icons.style1 li a:hover {
            transform: scale(1.1125);
        }

        .icons.style1 li a:hover+svg {
            transform: scale(1.1125);
        }

        .icc-credits {
            display: block;
            opacity: 1 !important;
            position: relative;
            transition-delay: 0s !important;
        }

        .icc-credits span {
            border-radius: 24px;
            cursor: pointer;
            display: inline-block;
            font-family: Arial, sans-serif;
            font-size: 12px;
            letter-spacing: 0;
            line-height: 1;
            position: relative;
            text-decoration: none;
            width: auto;
        }

        .icc-credits span a {
            display: inline-block;
            padding: 0.5em 0.375em;
            position: relative;
            text-decoration: none;
            transition: color 0.25s ease, transform 0.25s ease;
            z-index: 1;
        }

        .icc-credits span a:before {
            content: '( ';
            opacity: 1;
            transition: opacity 0.25s ease;
        }

        .icc-credits span a:after {
            content: ' )';
            opacity: 1;
            transition: opacity 0.25s ease;
        }

        .icc-credits span::after {
            background-image: linear-gradient(30deg, #A464A1 15%, #3B5DAD 85%);
            border-radius: inherit;
            box-shadow: 0 0.25em 1.25em 0 rgba(0, 0, 0, 0.25);
            content: '';
            display: block;
            height: calc(100% + 2px);
            left: -1px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: -1px;
            transition: opacity 0.25s ease, box-shadow 0.25s ease, transform 0.25s ease;
            width: calc(100% + 2px);
        }

        .icc-credits span:hover {
            text-transform: none !important;
        }

        .icc-credits span:hover a {
            color: #ffffff !important;
            transform: scale(1.1) translateY(-0.05rem);
        }

        .icc-credits span:hover a:before {
            opacity: 0;
        }

        .icc-credits span:hover a:after {
            opacity: 0;
        }

        .icc-credits span:hover::after {
            opacity: 1;
            transform: scale(1.1) translateY(-0.05rem);
        }

        #credits span {
            color: rgba(160, 167, 186, 0.498);
            margin-top: 1.5rem !important;
        }

        @media (max-width: 1920px) {}

        @media (max-width: 1680px) {
            html {
                font-size: 13pt;
            }
        }

        @media (max-width: 1280px) {
            html {
                font-size: 13pt;
            }
        }

        @media (max-width: 1024px) {}

        @media (max-width: 980px) {
            html {
                font-size: 11pt;
            }
        }

        @media (max-width: 736px) {
            html {
                font-size: 11pt;
            }

            #main>.inner {
                --padding-horizontal: 1.5rem;
                --padding-vertical: 1.5rem;
                --spacing: 1.75rem;
            }

            .container.style3:not(:first-child) {
                margin-top: 0rem !important;
            }

            .container.style3:not(:last-child) {
                margin-bottom: 0rem !important;
            }

            .container.style3>.wrapper>.inner {
                --gutters: 3rem;
                --padding-horizontal: 2rem;
                --padding-vertical: 3rem;
            }

            .container.style3.columns>.wrapper>.inner {
                flex-direction: column !important;
                flex-wrap: nowrap !important;
            }

            .container.style3.columns>.wrapper>.inner>span {
                height: 0;
                margin-top: calc(var(--gutters) * -1);
                pointer-events: none;
                visibility: hidden;
            }

            .container.style3.columns>.wrapper>.inner>*:first-child {
                margin-left: 0 !important;
                padding-top: 0 !important;
            }

            .container.style3.columns>.wrapper>.inner>* {
                padding: calc(var(--gutters) * 0.5) 0 !important;
            }

            .container.style3.columns>.wrapper>.inner>*:last-child {
                padding-bottom: 0 !important;
            }

            .container.style3.columns>.wrapper>.inner>div>.full {
                margin-left: calc(var(--padding-horizontal) * -1);
                width: calc(100% + (var(--padding-horizontal) * 2) + 0.4725px);
            }

            .container.style3.columns>.wrapper>.inner>div:first-of-type>.full {
                margin-left: calc(var(--padding-horizontal) * -1);
                width: calc(100% + (var(--padding-horizontal) * 2) + 0.4725px);
            }

            .container.style3.columns>.wrapper>.inner>div:last-of-type>.full {
                margin-left: calc(var(--padding-horizontal) * -1);
                width: calc(100% + (var(--padding-horizontal) * 2) + 0.4725px);
            }

            .container.style3.columns>.wrapper>.inner>div>.full:first-child {
                margin-top: calc(var(--gutters) * -0.5) !important;
            }

            .container.style3.columns>.wrapper>.inner>div>.full:last-child {
                margin-bottom: calc(var(--gutters) * -0.5) !important;
            }

            .container.style3.columns>.wrapper>.inner>div:first-of-type>.full:first-child {
                margin-top: calc(var(--padding-vertical) * -1) !important;
            }

            .container.style3.columns>.wrapper>.inner>div:last-of-type>.full:last-child {
                margin-bottom: calc(var(--padding-vertical) * -1) !important;
            }

            .container.style3.columns>.wrapper>.inner>div:first-of-type,
            .container.style3.columns>.wrapper>.inner>div:first-of-type>.full:first-child {
                border-top-left-radius: inherit;
                border-top-right-radius: inherit;
            }

            .container.style3.columns>.wrapper>.inner>div:last-of-type,
            .container.style3.columns>.wrapper>.inner>div:last-of-type>.full:last-child {
                border-bottom-left-radius: inherit;
                border-bottom-right-radius: inherit;
            }

            .container.style3.columns>.wrapper>.inner>div:first-of-type,
            .container.style3.columns>.wrapper>.inner>div:first-of-type>.full:last-child {
                border-bottom-left-radius: 0 !important;
            }

            .container.style3.columns>.wrapper>.inner>div:last-of-type,
            .container.style3.columns>.wrapper>.inner>div:last-of-type>.full:first-child {
                border-top-right-radius: 0 !important;
            }

            .container.style3.columns>.wrapper>.inner>.full>.full:first-child:last-child {
                height: auto;
            }

            .container.style3.columns>.wrapper>.inner>.full>.full:first-child:last-child>* {
                height: auto;
                position: relative;
                width: auto;
            }

            .container.style2:not(:first-child) {
                margin-top: 0rem !important;
            }

            .container.style2:not(:last-child) {
                margin-bottom: 0rem !important;
            }

            .container.style2>.wrapper>.inner {
                --gutters: 3rem;
                --padding-horizontal: 2rem;
                --padding-vertical: 3rem;
            }

            .container.style2.columns>.wrapper>.inner {
                flex-direction: column !important;
                flex-wrap: nowrap !important;
            }

            .container.style2.columns>.wrapper>.inner>span {
                height: 0;
                margin-top: calc(var(--gutters) * -1);
                pointer-events: none;
                visibility: hidden;
            }

            .container.style2.columns>.wrapper>.inner>*:first-child {
                margin-left: 0 !important;
                padding-top: 0 !important;
            }

            .container.style2.columns>.wrapper>.inner>* {
                padding: calc(var(--gutters) * 0.5) 0 !important;
            }

            .container.style2.columns>.wrapper>.inner>*:last-child {
                padding-bottom: 0 !important;
            }

            .container.style2.columns>.wrapper>.inner>div>.full {
                margin-left: calc(var(--padding-horizontal) * -1);
                width: calc(100% + (var(--padding-horizontal) * 2) + 0.4725px);
            }

            .container.style2.columns>.wrapper>.inner>div:first-of-type>.full {
                margin-left: calc(var(--padding-horizontal) * -1);
                width: calc(100% + (var(--padding-horizontal) * 2) + 0.4725px);
            }

            .container.style2.columns>.wrapper>.inner>div:last-of-type>.full {
                margin-left: calc(var(--padding-horizontal) * -1);
                width: calc(100% + (var(--padding-horizontal) * 2) + 0.4725px);
            }

            .container.style2.columns>.wrapper>.inner>div>.full:first-child {
                margin-top: calc(var(--gutters) * -0.5) !important;
            }

            .container.style2.columns>.wrapper>.inner>div>.full:last-child {
                margin-bottom: calc(var(--gutters) * -0.5) !important;
            }

            .container.style2.columns>.wrapper>.inner>div:first-of-type>.full:first-child {
                margin-top: calc(var(--padding-vertical) * -1) !important;
            }

            .container.style2.columns>.wrapper>.inner>div:last-of-type>.full:last-child {
                margin-bottom: calc(var(--padding-vertical) * -1) !important;
            }

            .container.style2.columns>.wrapper>.inner>div:first-of-type,
            .container.style2.columns>.wrapper>.inner>div:first-of-type>.full:first-child {
                border-top-left-radius: inherit;
                border-top-right-radius: inherit;
            }

            .container.style2.columns>.wrapper>.inner>div:last-of-type,
            .container.style2.columns>.wrapper>.inner>div:last-of-type>.full:last-child {
                border-bottom-left-radius: inherit;
                border-bottom-right-radius: inherit;
            }

            .container.style2.columns>.wrapper>.inner>div:first-of-type,
            .container.style2.columns>.wrapper>.inner>div:first-of-type>.full:last-child {
                border-bottom-left-radius: 0 !important;
            }

            .container.style2.columns>.wrapper>.inner>div:last-of-type,
            .container.style2.columns>.wrapper>.inner>div:last-of-type>.full:first-child {
                border-top-right-radius: 0 !important;
            }

            .container.style2.columns>.wrapper>.inner>.full>.full:first-child:last-child {
                height: auto;
            }

            .container.style2.columns>.wrapper>.inner>.full>.full:first-child:last-child>* {
                height: auto;
                position: relative;
                width: auto;
            }

            #container03>.wrapper>.inner> :nth-child(1) {
                width: 100% !important;
                min-height: 100% !important;
            }

            #container03>.wrapper>.inner> :nth-child(2) {
                width: 100% !important;
                min-height: 100% !important;
            }

            #container04>.wrapper>.inner> :nth-child(1) {
                width: 100% !important;
                min-height: 100% !important;
            }

            #container04>.wrapper>.inner> :nth-child(2) {
                width: 100% !important;
                min-height: 100% !important;
            }

            hr.style1:not(:first-child) {
                margin-top: 0rem !important;
            }

            hr.style1:not(:last-child) {
                margin-bottom: 0rem !important;
            }

            hr.style1:before {
                height: 5rem;
            }

            h1.style1,
            h2.style1,
            h3.style1,
            p.style1 {
                letter-spacing: 0rem;
                width: 100%;
                font-size: 1.75em;
                line-height: 1.375;
            }

            h1.style4,
            h2.style4,
            h3.style4,
            p.style4 {
                letter-spacing: 0rem;
                width: 100%;
                font-size: 1em;
                line-height: 1.875;
            }

            h1.style2,
            h2.style2,
            h3.style2,
            p.style2 {
                letter-spacing: 0rem;
                width: 100%;
                font-size: 2.75em;
                line-height: 1.25;
            }

            .image.style3:not(:first-child) {
                margin-top: 3rem !important;
            }

            .image.style3:not(:last-child) {
                margin-bottom: 3rem !important;
            }

            .image.style3 .frame {
                width: 100vw;
                height: 18.75rem !important;
            }

            .image.style3 img {
                height: 100% !important;
                object-fit: cover;
                object-position: center;
                width: 100% !important;
            }

            .image.style1 .frame {
                width: 7.75rem;
            }

            .buttons.style1 li a {
                letter-spacing: 0.25rem;
                padding-left: calc(0.25rem + 2rem);
                font-size: 0.75em;
            }

            .buttons.style1 li a svg {
                width: 1.875em;
            }

            .icons.style1 {
                font-size: 1.875em;
                gap: 0.75rem;
            }
        }

        @media (max-width: 480px) {
            #main>.inner {
                --spacing: 1.53125rem;
            }

            .image.style3 .frame {
                height: 15rem !important;
            }
        }

        @media (max-width: 360px) {
            #main>.inner {
                --padding-horizontal: 1.125rem;
                --padding-vertical: 1.125rem;
                --spacing: 1.3125rem;
            }

            .container.style3>.wrapper>.inner {
                --gutters: 2.25rem;
                --padding-horizontal: 1.5rem;
                --padding-vertical: 2.25rem;
            }

            .container.style2>.wrapper>.inner {
                --gutters: 3rem;
                --padding-horizontal: 1.5rem;
                --padding-vertical: 2.25rem;
            }

            #container03>.wrapper>.inner> :nth-child(1) {
                width: calc(50% + 1.5rem);
            }

            #container03>.wrapper>.inner> :nth-child(2) {
                width: calc(50% + 1.5rem);
            }

            #container04>.wrapper>.inner> :nth-child(1) {
                width: calc(50% + 1.5rem);
            }

            #container04>.wrapper>.inner> :nth-child(2) {
                width: calc(50% + 1.5rem);
            }

            h1.style1,
            h2.style1,
            h3.style1,
            p.style1 {
                font-size: 1.75em;
            }

            h1.style4,
            h2.style4,
            h3.style4,
            p.style4 {
                font-size: 1em;
            }

            h1.style2,
            h2.style2,
            h3.style2,
            p.style2 {
                font-size: 2.75em;
            }

            .image.style3 .frame {
                height: 13.125rem !important;
            }

            .buttons.style1 {
                gap: 0rem;
            }

            .icons.style1 {
                gap: 0.5625rem;
            }
        }
    </style><noscript>
        <style>
            body {
                overflow: auto !important;
            }

            body:after {
                display: none !important;
            }

            #main>.inner {
                opacity: 1.0 !important;
            }

            #main {
                opacity: 1.0 !important;
                transform: none !important;
                transition: none !important;
                filter: none !important;
            }
        </style>
    </noscript>
</head>

<body class="is-loading"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" display="none" width="0" height="0">
        <symbol id="icon-9e2" viewBox="0 0 40 40">
            <path
                d="M35.7,36.6H4.3C3.6,36.6,3,36,3,35.3V34c0-0.7,0.6-1.3,1.3-1.3h31.5c0.7,0,1.3,0.6,1.3,1.3v1.3C37,36.1,36.4,36.6,35.7,36.6 z M21.4,28.3c-0.4,0.4-0.9,0.6-1.5,0.6s-1.1-0.2-1.5-0.6L8,18c-0.4-0.4-0.6-0.9-0.6-1.5S7.6,15.4,8,15l1.2-1.2 c0.4-0.4,0.9-0.6,1.5-0.6s1.1,0.2,1.5,0.6l4.7,4.7V7.3c0-0.6,0.2-1,0.6-1.4c0.4-0.3,0.8-0.5,1.4-0.5h2c0.6,0,1.1,0.2,1.5,0.5 C22.8,6.3,23,6.8,23,7.3v11.2l4.7-4.7c0.4-0.4,0.9-0.6,1.5-0.6s1.1,0.2,1.5,0.6l1.2,1.2c0.4,0.4,0.6,0.9,0.6,1.5s-0.2,1.1-0.6,1.5 L21.4,28.3z" />
        </symbol>
        <symbol id="icon-a39" viewBox="0 0 40 40">
            <path
                d="M5.2,14.6l1.5-1.5c0.2-0.2,0.5-0.2,0.7,0l12.4,12.4l12.4-12.4c0.2-0.2,0.5-0.2,0.7,0l1.6,1.6c0.2,0.2,0.2,0.5,0,0.7L19.8,30 L5.2,15.4C5,15.2,5,14.8,5.2,14.6z" />
        </symbol>
    </svg>
    <div id="wrapper">
        <div id="main">
            <div class="inner">
                <div id="container01" class="style3 container default">
                    <div class="wrapper">
                        <div class="inner" data-onvisible-trigger="1">
                            <div id="image04" class="style1 image"><span class="frame"><img
                                        src="assets/images/image04e7cb.png?v=6aba7a90" alt="" /></span></div>
                            <h1 id="text01" class="style2">Garden&#39;Clash</h1>
                            <p id="text16" class="style4"><span class="p">A turn-based strategic Python console game.
                                    With wacky characters inspired by the place you call home, your garden.<br /> Play
                                    with your lawnmower, your garden hose and even with the insects that keep the eco
                                    system running smoothly.</span></p>
                            <ul id="icons02" class="style1 icons">
                                <li><a class="n01" href="#start"><svg>
                                            <use xlink:href="#icon-a39"></use>
                                        </svg><span class="label">Chevron Down (Light)</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr id="divider02" class="style1">
                <div id="container03" data-scroll-id="start" data-scroll-behavior="center" data-scroll-offset="0"
                    data-scroll-invisible="1" class="style2 container columns">
                    <div class="wrapper">
                        <div class="inner" data-onvisible-trigger="1" data-reorder="1,0">
                            <div>
                                <h2 id="text03" class="style1">A user-friendly interface!</h2>
                                <p id="text05" class="style4">Garden&#39;Clash is developed to be enjoyable to play even
                                    though it is a console-based game.</p>
                            </div>
                            <div>
                                <div id="image01" class="style3 image" data-position="center"><span class="frame"><img
                                            src="assets/images/image01e7cb.jpg?v=6aba7a90" alt="" /></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr id="divider01" class="style1">
                <div id="container04" class="style2 container columns">
                    <div class="wrapper">
                        <div class="inner" data-onvisible-trigger="1" data-reorder="0,1">
                            <div>
                                <div id="image02" class="style3 image" data-position="center"><span class="frame"><img
                                            src="assets/images/image02e7cb.jpg?v=6aba7a90" alt="" /></span></div>
                            </div>
                            <div>
                                <h2 id="text07" class="style1">Unique skills!</h2>
                                <p id="text08" class="style4">Some characters have unique characteristics! Play these
                                    characters at the right time to ensure a crushing victory!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr id="divider03" class="style1">
                <div id="container02" class="style3 container default">
                    <div class="wrapper">
                        <div class="inner" data-onvisible-trigger="1">
                            <h2 id="text02" class="style1">Last winner</h2>
                            <p id="text11" class="style4">The last winner is</p>
                            <h2 id="text10" class="style2"><?php echo file_get_contents('https://gardenclash.staffe.net/last_name.txt')?></h2>
                            <p id="text11" class="style4">from <?php echo file_get_contents('https://gardenclash.staffe.net/last_country.txt')?></p>
                        </div>
                    </div>
                </div>
                <hr id="divider04" class="style1">
                <div id="container05" class="style3 container default">
                    <div class="wrapper">
                        <div class="inner" data-onvisible-trigger="1">
                            <h2 id="text04" class="style1">Now available for free!</h2>
                            <ul id="buttons02" class="style1 buttons">
                                <li><a href="https://github.com/IceroDev/GardenClash" class="button n01"><svg>
                                            <use xlink:href="#icon-9e2"></use>
                                        </svg><span class="label">Download now</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>(function () { var on = addEventListener, $ = function (q) { return document.querySelector(q) }, $$ = function (q) { return document.querySelectorAll(q) }, $body = document.body, $inner = $('.inner'), client = (function () { var o = { browser: 'other', browserVersion: 0, os: 'other', osVersion: 0, mobile: false, canUse: null, flags: { lsdUnits: false, }, }, ua = navigator.userAgent, a, i; a = [['firefox', /Firefox\/([0-9\.]+)/], ['edge', /Edge\/([0-9\.]+)/], ['safari', /Version\/([0-9\.]+).+Safari/], ['chrome', /Chrome\/([0-9\.]+)/], ['chrome', /CriOS\/([0-9\.]+)/], ['ie', /Trident\/.+rv:([0-9]+)/]]; for (i = 0; i < a.length; i++) { if (ua.match(a[i][1])) { o.browser = a[i][0]; o.browserVersion = parseFloat(RegExp.$1); break; } } a = [['ios', /([0-9_]+) like Mac OS X/, function (v) { return v.replace('_', '.').replace('_', ''); }], ['ios', /CPU like Mac OS X/, function (v) { return 0 }], ['ios', /iPad; CPU/, function (v) { return 0 }], ['android', /Android ([0-9\.]+)/, null], ['mac', /Macintosh.+Mac OS X ([0-9_]+)/, function (v) { return v.replace('_', '.').replace('_', ''); }], ['windows', /Windows NT ([0-9\.]+)/, null], ['undefined', /Undefined/, null],]; for (i = 0; i < a.length; i++) { if (ua.match(a[i][1])) { o.os = a[i][0]; o.osVersion = parseFloat(a[i][2] ? (a[i][2])(RegExp.$1) : RegExp.$1); break; } } if (o.os == 'mac' && ('ontouchstart' in window) && ((screen.width == 1024 && screen.height == 1366) || (screen.width == 834 && screen.height == 1112) || (screen.width == 810 && screen.height == 1080) || (screen.width == 768 && screen.height == 1024))) o.os = 'ios'; o.mobile = (o.os == 'android' || o.os == 'ios'); var _canUse = document.createElement('div'); o.canUse = function (property, value) { var style; style = _canUse.style; if (!(property in style)) return false; if (typeof value !== 'undefined') { style[property] = value; if (style[property] == '') return false; } return true; }; o.flags.lsdUnits = o.canUse('width', '100dvw'); return o; }()), trigger = function (t) { dispatchEvent(new Event(t)); }, cssRules = function (selectorText) { var ss = document.styleSheets, a = [], f = function (s) { var r = s.cssRules, i; for (i = 0; i < r.length; i++) { if (r[i] instanceof CSSMediaRule && matchMedia(r[i].conditionText).matches) (f)(r[i]); else if (r[i] instanceof CSSStyleRule && r[i].selectorText == selectorText) a.push(r[i]); } }, x, i; for (i = 0; i < ss.length; i++)f(ss[i]); return a; }, thisHash = function () { var h = location.hash ? location.hash.substring(1) : null, a; if (!h) return null; if (h.match(/\?/)) { a = h.split('?'); h = a[0]; history.replaceState(undefined, undefined, '#' + h); window.location.search = a[1]; } if (h.length > 0 && !h.match(/^[a-zA-Z]/)) h = 'x' + h; if (typeof h == 'string') h = h.toLowerCase(); return h; }, scrollToElement = function (e, style, duration) { var y, cy, dy, start, easing, offset, f; if (!e) y = 0; else { offset = (e.dataset.scrollOffset ? parseInt(e.dataset.scrollOffset) : 0) * parseFloat(getComputedStyle(document.documentElement).fontSize); switch (e.dataset.scrollBehavior ? e.dataset.scrollBehavior : 'default') { case 'default': default: y = e.offsetTop + offset; break; case 'center': if (e.offsetHeight < window.innerHeight) y = e.offsetTop - ((window.innerHeight - e.offsetHeight) / 2) + offset; else y = e.offsetTop - offset; break; case 'previous': if (e.previousElementSibling) y = e.previousElementSibling.offsetTop + e.previousElementSibling.offsetHeight + offset; else y = e.offsetTop + offset; break; } } if (!style) style = 'smooth'; if (!duration) duration = 750; if (style == 'instant') { window.scrollTo(0, y); return; } start = Date.now(); cy = window.scrollY; dy = y - cy; switch (style) { case 'linear': easing = function (t) { return t }; break; case 'smooth': easing = function (t) { return t < .5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1 }; break; }f = function () { var t = Date.now() - start; if (t >= duration) window.scroll(0, y); else { window.scroll(0, cy + (dy * easing(t / duration))); requestAnimationFrame(f); } }; f(); }, scrollToTop = function () { scrollToElement(null); }, loadElements = function (parent) { var a, e, x, i; a = parent.querySelectorAll('iframe[data-src]:not([data-src=""])'); for (i = 0; i < a.length; i++) { a[i].src = a[i].dataset.src; a[i].dataset.src = ""; } a = parent.querySelectorAll('video[autoplay]'); for (i = 0; i < a.length; i++) { if (a[i].paused) a[i].play(); } e = parent.querySelector('[data-autofocus="1"]'); x = e ? e.tagName : null; switch (x) { case 'FORM': e = e.querySelector('.field input, .field select, .field textarea'); if (e) e.focus(); break; default: break; } }, unloadElements = function (parent) { var a, e, x, i; a = parent.querySelectorAll('iframe[data-src=""]'); for (i = 0; i < a.length; i++) { if (a[i].dataset.srcUnload === '0') continue; a[i].dataset.src = a[i].src; a[i].src = ''; } a = parent.querySelectorAll('video'); for (i = 0; i < a.length; i++) { if (!a[i].paused) a[i].pause(); } e = $(':focus'); if (e) e.blur(); }; window._scrollToTop = scrollToTop; var thisURL = function () { return window.location.href.replace(window.location.search, '').replace(/#$/, ''); }; var getVar = function (name) { var a = window.location.search.substring(1).split('&'), b, k; for (k in a) { b = a[k].split('='); if (b[0] == name) return b[1]; } return null; }; var errors = { handle: function (handler) { window.onerror = function (message, url, line, column, error) { (handler)(error.message); return true; }; }, unhandle: function () { window.onerror = null; } }; on('load', function () { setTimeout(function () { $body.className = $body.className.replace(/\bis-loading\b/, 'is-playing'); setTimeout(function () { $body.className = $body.className.replace(/\bis-playing\b/, 'is-ready'); }, 1250); }, 100); }); loadElements(document.body); (function () { window._scrollToTop = function () { scrollToElement(null); if (window.location.hash) { history.pushState(null, null, '.'); } }; if ('scrollRestoration' in history) history.scrollRestoration = 'manual'; on('load', function () { var initialScrollPoint, h; h = thisHash(); if (h && !h.match(/^[a-zA-Z0-9\-]+$/)) h = null; initialScrollPoint = $('[data-scroll-id="' + h + '"]'); if (initialScrollPoint) scrollToElement(initialScrollPoint, 'instant'); }); on('hashchange', function (event) { var scrollPoint, h, pos; h = thisHash(); if (h && !h.match(/^[a-zA-Z0-9\-]+$/)) return false; scrollPoint = $('[data-scroll-id="' + h + '"]'); if (scrollPoint) scrollToElement(scrollPoint); else scrollToElement(null); return false; }); on('click', function (event) { var t = event.target, tagName = t.tagName.toUpperCase(), scrollPoint; switch (tagName) { case 'IMG': case 'SVG': case 'USE': case 'U': case 'STRONG': case 'EM': case 'CODE': case 'S': case 'MARK': case 'SPAN': while (!!(t = t.parentElement)) if (t.tagName == 'A') break; if (!t) return; break; default: break; }if (t.tagName == 'A' && t.getAttribute('href').substr(0, 1) == '#') { if (!!(scrollPoint = $('[data-scroll-id="' + t.hash.substr(1) + '"][data-scroll-invisible="1"]'))) { event.preventDefault(); scrollToElement(scrollPoint); } else if (t.hash == window.location.hash) { event.preventDefault(); history.replaceState(undefined, undefined, '#'); location.replace(t.hash); } } }); })(); var style, sheet, rule; style = document.createElement('style'); style.appendChild(document.createTextNode('')); document.head.appendChild(style); sheet = style.sheet; if (client.mobile) { (function () { if (client.flags.lsdUnits) { document.documentElement.style.setProperty('--viewport-height', '100dvh'); document.documentElement.style.setProperty('--background-height', '100lvh'); } else { var f = function () { document.documentElement.style.setProperty('--viewport-height', window.innerHeight + 'px'); document.documentElement.style.setProperty('--background-height', (window.innerHeight + 250) + 'px'); }; on('load', f); on('resize', f); on('orientationchange', function () { setTimeout(function () { (f)(); }, 100); }); } })(); } if (client.os == 'android') { (function () { sheet.insertRule('body::after { }', 0); rule = sheet.cssRules[0]; var f = function () { rule.style.cssText = 'height: ' + (Math.max(screen.width, screen.height)) + 'px'; }; on('load', f); on('orientationchange', f); on('touchmove', f); })(); $body.classList.add('is-touch'); } else if (client.os == 'ios') { if (client.osVersion <= 11) (function () { sheet.insertRule('body::after { }', 0); rule = sheet.cssRules[0]; rule.style.cssText = '-webkit-transform: scale(1.0)'; })(); if (client.osVersion <= 11) (function () { sheet.insertRule('body.ios-focus-fix::before { }', 0); rule = sheet.cssRules[0]; rule.style.cssText = 'height: calc(100% + 60px)'; on('focus', function (event) { $body.classList.add('ios-focus-fix'); }, true); on('blur', function (event) { $body.classList.remove('ios-focus-fix'); }, true); })(); $body.classList.add('is-touch'); } (function () { var breakpoints = { small: '(max-width: 736px)', medium: '(max-width: 980px)', }, elements = $$('[data-reorder]'); elements.forEach(function (e) { var desktop = [], mobile = [], state = false, query, a, x, ce, f; if ('reorderBreakpoint' in e.dataset && e.dataset.reorderBreakpoint in breakpoints) query = breakpoints[e.dataset.reorderBreakpoint]; else query = breakpoints.small; for (ce of e.childNodes) { if (ce.nodeType != 1) continue; desktop.push(ce); } a = e.dataset.reorder.split(','); for (x of a) mobile.push(desktop[parseInt(x)]); f = function () { var order = null, ce; if (window.matchMedia(query).matches) { if (!state) { state = true; for (ce of mobile) e.appendChild(ce); } } else { if (state) { state = false; for (ce of desktop) e.appendChild(ce); } } }; on('resize', f); on('orientationchange', f); on('load', f); on('fullscreenchange', f); }); })(); var scrollEvents = { items: [], add: function (o) { this.items.push({ element: o.element, triggerElement: (('triggerElement' in o && o.triggerElement) ? o.triggerElement : o.element), enter: ('enter' in o ? o.enter : null), leave: ('leave' in o ? o.leave : null), mode: ('mode' in o ? o.mode : 1), offset: ('offset' in o ? o.offset : 0), initialState: ('initialState' in o ? o.initialState : null), state: false, }); }, handler: function () { var height, top, bottom, scrollPad; if (client.os == 'ios') { height = document.documentElement.clientHeight; top = document.body.scrollTop + window.scrollY; bottom = top + height; scrollPad = 125; } else { height = document.documentElement.clientHeight; top = document.documentElement.scrollTop; bottom = top + height; scrollPad = 0; } scrollEvents.items.forEach(function (item) { var bcr, elementTop, elementBottom, state, a, b; if (!item.enter && !item.leave) return true; if (!item.triggerElement || item.triggerElement.offsetParent === null) return true; bcr = item.triggerElement.getBoundingClientRect(); elementTop = top + Math.floor(bcr.top); elementBottom = elementTop + bcr.height; if (item.initialState !== null) { state = item.initialState; item.initialState = null; } else { switch (item.mode) { case 1: default: state = (bottom > (elementTop - item.offset) && top < (elementBottom + item.offset)); break; case 2: a = (top + (height * 0.5)); state = (a > (elementTop - item.offset) && a < (elementBottom + item.offset)); break; case 3: a = top + (height * 0.25); if (a - (height * 0.375) <= 0) a = 0; b = top + (height * 0.75); if (b + (height * 0.375) >= document.body.scrollHeight - scrollPad) b = document.body.scrollHeight + scrollPad; state = (b > (elementTop - item.offset) && a < (elementBottom + item.offset)); break; } } if (state != item.state) { item.state = state; if (item.state) { if (item.enter) { (item.enter).apply(item.element); if (!item.leave) item.enter = null; } } else { if (item.leave) { (item.leave).apply(item.element); if (!item.enter) item.leave = null; } } } }); }, init: function () { on('load', this.handler); on('resize', this.handler); on('scroll', this.handler); (this.handler)(); } }; scrollEvents.init(); var onvisible = { effects: { 'blur-in': { transition: function (speed, delay) { return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'filter ' + speed + 's ease' + (delay ? ' ' + delay + 's' : ''); }, rewind: function (intensity) { this.style.opacity = 0; this.style.filter = 'blur(' + (0.25 * intensity) + 'rem)'; }, play: function () { this.style.opacity = 1; this.style.filter = 'none'; }, }, 'zoom-in': { transition: function (speed, delay) { return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : ''); }, rewind: function (intensity, alt) { this.style.opacity = 0; this.style.transform = 'scale(' + (1 - ((alt ? 0.25 : 0.05) * intensity)) + ')'; }, play: function () { this.style.opacity = 1; this.style.transform = 'none'; }, }, 'zoom-out': { transition: function (speed, delay) { return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : ''); }, rewind: function (intensity, alt) { this.style.opacity = 0; this.style.transform = 'scale(' + (1 + ((alt ? 0.25 : 0.05) * intensity)) + ')'; }, play: function () { this.style.opacity = 1; this.style.transform = 'none'; }, }, 'slide-left': { transition: function (speed, delay) { return 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : ''); }, rewind: function () { this.style.transform = 'translateX(100vw)'; }, play: function () { this.style.transform = 'none'; }, }, 'slide-right': { transition: function (speed, delay) { return 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : ''); }, rewind: function () { this.style.transform = 'translateX(-100vw)'; }, play: function () { this.style.transform = 'none'; }, }, 'flip-forward': { transition: function (speed, delay) { return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : ''); }, rewind: function (intensity, alt) { this.style.opacity = 0; this.style.transformOrigin = '50% 50%'; this.style.transform = 'perspective(1000px) rotateX(' + ((alt ? 45 : 15) * intensity) + 'deg)'; }, play: function () { this.style.opacity = 1; this.style.transform = 'none'; }, }, 'flip-backward': { transition: function (speed, delay) { return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : ''); }, rewind: function (intensity, alt) { this.style.opacity = 0; this.style.transformOrigin = '50% 50%'; this.style.transform = 'perspective(1000px) rotateX(' + ((alt ? -45 : -15) * intensity) + 'deg)'; }, play: function () { this.style.opacity = 1; this.style.transform = 'none'; }, }, 'flip-left': { transition: function (speed, delay) { return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : ''); }, rewind: function (intensity, alt) { this.style.opacity = 0; this.style.transformOrigin = '50% 50%'; this.style.transform = 'perspective(1000px) rotateY(' + ((alt ? 45 : 15) * intensity) + 'deg)'; }, play: function () { this.style.opacity = 1; this.style.transform = 'none'; }, }, 'flip-right': { transition: function (speed, delay) { return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : ''); }, rewind: function (intensity, alt) { this.style.opacity = 0; this.style.transformOrigin = '50% 50%'; this.style.transform = 'perspective(1000px) rotateY(' + ((alt ? -45 : -15) * intensity) + 'deg)'; }, play: function () { this.style.opacity = 1; this.style.transform = 'none'; }, }, 'tilt-left': { transition: function (speed, delay) { return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : ''); }, rewind: function (intensity, alt) { this.style.opacity = 0; this.style.transform = 'rotate(' + ((alt ? 45 : 5) * intensity) + 'deg)'; }, play: function () { this.style.opacity = 1; this.style.transform = 'none'; }, }, 'tilt-right': { transition: function (speed, delay) { return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : ''); }, rewind: function (intensity, alt) { this.style.opacity = 0; this.style.transform = 'rotate(' + ((alt ? -45 : -5) * intensity) + 'deg)'; }, play: function () { this.style.opacity = 1; this.style.transform = 'none'; }, }, 'fade-right': { transition: function (speed, delay) { return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : ''); }, rewind: function (intensity) { this.style.opacity = 0; this.style.transform = 'translateX(' + (-1.5 * intensity) + 'rem)'; }, play: function () { this.style.opacity = 1; this.style.transform = 'none'; }, }, 'fade-left': { transition: function (speed, delay) { return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : ''); }, rewind: function (intensity) { this.style.opacity = 0; this.style.transform = 'translateX(' + (1.5 * intensity) + 'rem)'; }, play: function () { this.style.opacity = 1; this.style.transform = 'none'; }, }, 'fade-down': { transition: function (speed, delay) { return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : ''); }, rewind: function (intensity) { this.style.opacity = 0; this.style.transform = 'translateY(' + (-1.5 * intensity) + 'rem)'; }, play: function () { this.style.opacity = 1; this.style.transform = 'none'; }, }, 'fade-up': { transition: function (speed, delay) { return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : ''); }, rewind: function (intensity) { this.style.opacity = 0; this.style.transform = 'translateY(' + (1.5 * intensity) + 'rem)'; }, play: function () { this.style.opacity = 1; this.style.transform = 'none'; }, }, 'fade-in': { transition: function (speed, delay) { return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : ''); }, rewind: function () { this.style.opacity = 0; }, play: function () { this.style.opacity = 1; }, }, 'fade-in-background': { custom: true, transition: function (speed, delay) { this.style.setProperty('--onvisible-speed', speed + 's'); if (delay) this.style.setProperty('--onvisible-delay', delay + 's'); }, rewind: function () { this.style.removeProperty('--onvisible-background-color'); }, play: function () { this.style.setProperty('--onvisible-background-color', 'rgba(0,0,0,0.001)'); }, }, 'zoom-in-image': { target: 'img', transition: function (speed, delay) { return 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : ''); }, rewind: function () { this.style.transform = 'scale(1)'; }, play: function (intensity) { this.style.transform = 'scale(' + (1 + (0.1 * intensity)) + ')'; }, }, 'zoom-out-image': { target: 'img', transition: function (speed, delay) { return 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : ''); }, rewind: function (intensity) { this.style.transform = 'scale(' + (1 + (0.1 * intensity)) + ')'; }, play: function () { this.style.transform = 'none'; }, }, 'focus-image': { target: 'img', transition: function (speed, delay) { return 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'filter ' + speed + 's ease' + (delay ? ' ' + delay + 's' : ''); }, rewind: function (intensity) { this.style.transform = 'scale(' + (1 + (0.05 * intensity)) + ')'; this.style.filter = 'blur(' + (0.25 * intensity) + 'rem)'; }, play: function (intensity) { this.style.transform = 'none'; this.style.filter = 'none'; }, }, }, add: function (selector, settings) { var style = settings.style in this.effects ? settings.style : 'fade', speed = parseInt('speed' in settings ? settings.speed : 1000) / 1000, intensity = ((parseInt('intensity' in settings ? settings.intensity : 5) / 10) * 1.75) + 0.25, delay = parseInt('delay' in settings ? settings.delay : 0) / 1000, offset = parseInt('offset' in settings ? settings.offset : 0), mode = parseInt('mode' in settings ? settings.mode : 3), replay = 'replay' in settings ? settings.replay : false, stagger = 'stagger' in settings ? (parseInt(settings.stagger) / 1000) : false, state = 'state' in settings ? settings.state : null, effect = this.effects[style]; if ('CARRD_DISABLE_ANIMATION' in window) { if (style == 'fade-in-background') $$(selector).forEach(function (e) { e.style.setProperty('--onvisible-background-color', 'rgba(0,0,0,0.001)'); }); return; } $$(selector).forEach(function (e) { var children = (stagger !== false) ? e.querySelectorAll(':scope > li, :scope ul > li') : null, enter = function (staggerDelay = 0) { var _this = this, transitionOrig; if (effect.target) _this = this.querySelector(effect.target); if (!effect.custom) { transitionOrig = _this.style.transition; _this.style.setProperty('backface-visibility', 'hidden'); _this.style.transition = effect.transition(speed, delay + staggerDelay); } else effect.transition.apply(_this, [speed, delay + staggerDelay]); effect.play.apply(_this, [intensity, !!children]); if (!effect.custom) setTimeout(function () { _this.style.removeProperty('backface-visibility'); _this.style.transition = transitionOrig; }, (speed + delay + staggerDelay) * 1000 * 2); }, leave = function () { var _this = this, transitionOrig; if (effect.target) _this = this.querySelector(effect.target); if (!effect.custom) { transitionOrig = _this.style.transition; _this.style.setProperty('backface-visibility', 'hidden'); _this.style.transition = effect.transition(speed); } else effect.transition.apply(_this, [speed]); effect.rewind.apply(_this, [intensity, !!children]); if (!effect.custom) setTimeout(function () { _this.style.removeProperty('backface-visibility'); _this.style.transition = transitionOrig; }, speed * 1000 * 2); }, targetElement, triggerElement; if (effect.target) targetElement = e.querySelector(effect.target); else targetElement = e; if (children) children.forEach(function (targetElement) { effect.rewind.apply(targetElement, [intensity, true]); }); else effect.rewind.apply(targetElement, [intensity]); triggerElement = e; if (e.parentNode) { if (e.parentNode.dataset.onvisibleTrigger) triggerElement = e.parentNode; else if (e.parentNode.parentNode) { if (e.parentNode.parentNode.dataset.onvisibleTrigger) triggerElement = e.parentNode.parentNode; } } scrollEvents.add({ element: e, triggerElement: triggerElement, offset: offset, mode: mode, initialState: state, enter: children ? function () { var staggerDelay = 0; children.forEach(function (e) { enter.apply(e, [staggerDelay]); staggerDelay += stagger; }); } : enter, leave: (replay ? (children ? function () { children.forEach(function (e) { leave.apply(e); }); } : leave) : null), }); }); }, }; onvisible.add('h1.style1, h2.style1, h3.style1, p.style1', { style: 'fade-left', speed: 1000, intensity: 0, delay: 0, replay: false }); onvisible.add('h1.style4, h2.style4, h3.style4, p.style4', { style: 'fade-in', speed: 1000, intensity: 0, delay: 0, replay: false }); onvisible.add('.image.style3', { style: 'zoom-out-image', speed: 1000, intensity: 5, delay: 0, replay: false }); onvisible.add('.buttons.style1', { style: 'fade-up', speed: 1000, intensity: 0, delay: 0, replay: false }); onvisible.add('h1.style2, h2.style2, h3.style2, p.style2', { style: 'fade-left', speed: 1000, intensity: 0, delay: 0, replay: false }); onvisible.add('.image.style1', { style: 'zoom-in', speed: 1000, intensity: 5, delay: 0, replay: false }); onvisible.add('.icons.style1', { style: 'fade-up', speed: 1000, intensity: 0, delay: 0, replay: false }); })();</script>
</body>
</html>