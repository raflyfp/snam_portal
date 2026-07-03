import { CapacitorConfig } from '@capacitor/cli';

const config: CapacitorConfig = {
    appId: 'com.xl.MyXL.Giant-staging',
    appName: 'SNA Medika Portal',

    webDir: 'public',


    server: {
        url: 'https://portal.eclairs.my.id/',
        cleartext: true,
        // errorPath: 'index.html',
        allowNavigation: [
            '*.dpdns.org',
            'snam110.dpdns.org',
            'www.snam110.dpdns.org',
            '*.eclairs.my.id',
            'portal.eclairs.my.id'
        ]
    }

};

export default config;