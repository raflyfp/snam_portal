import { CapacitorConfig } from '@capacitor/cli';

const config: CapacitorConfig = {
    appId: 'com.snamedika.portal',
    appName: 'SNA Medika Portal',

    webDir: 'public',



    server: {
        url: 'https://portal.eclairs.my.id/',
        cleartext: false,
        errorPath: 'index.html'
    }

};

export default config;