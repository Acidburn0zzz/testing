# DO NOT EDIT EXCEPT FOR LOCAL TESTING.
# THIS IS A GENERATED FILE.
# ALL MANUAL CHANGES WILL BE OVERWRITTEN.
# SEE http://code.google.com/p/chromium/wiki/UsingGit
# FOR HOW TO ROLL DEPS
vars = {
    'ffmpeg_hash':
         '@ac4a9f31fe2610bd146857bbd55d7a260003a888',
    'webkit_url':
         'https://chromium.googlesource.com/chromium/blink.git',
    'git_url':
         'https://chromium.googlesource.com',
    'webkit_rev':
         '@e89bfc08669c2da6686e7e3fecaf4f215aac1b4b',
    'angle_revision':
         '74697cf2064c0a2c0d7e1b1b28db439286766a05'
}

deps = {
    'src/breakpad/src':
        Var('git_url') + '/external/google-breakpad/src.git@b9b51eb55b9746fcdbf6a1dd69667d1ac5b13604',
    'src/chrome/browser/resources/pdf/html_office':
        Var('git_url') + '/chromium/html-office-public.git@c29b3dcd20a03c5cec041764d178245b7d306dec',
    'src/chrome/test/data/extensions/api_test/permissions/nacl_enabled/bin':
        Var('git_url') + '/native_client/src/native_client/tests/prebuilt.git@3e17365176c94624f46cace174f61834b7f3c35d',
    'src/chrome/test/data/perf/canvas_bench':
        Var('git_url') + '/chromium/canvas_bench.git@a7b40ea5ae0239517d78845a5fc9b12976bfc732',
    'src/chrome/test/data/perf/frame_rate/content':
        Var('git_url') + '/chromium/frame_rate/content.git@c10272c88463efeef6bb19c9ec07c42bc8fe22b9',
    'src/chrome/test/data/perf/third_party/octane':
        Var('git_url') + '/external/octane-benchmark.git@9ac27bfd9e0bc73663db0c0551440215d8b20d09',
    'src/media/cdm/ppapi/api':
        Var('git_url') + '/chromium/cdm.git@53f0c537a5cc685663a51d4d8d7eb6b323a3e802',
    'src/native_client':
        Var('git_url') + '/native_client/src/native_client.git@44c028817cc1a21f9d8814555b19fd42eae538ef',
    'src/sdch/open-vcdiff':
        Var('git_url') + '/external/open-vcdiff.git@438f2a5be6d809bc21611a94cd37bfc8c28ceb33',
    'src/testing/gmock':
        Var('git_url') + '/external/googlemock.git@6b1759c3816d574bddde3e1725c51a811c8870e7',
    'src/testing/gtest':
        Var('git_url') + '/external/googletest.git@74de57c951aedebc5dfe26a27604353432392b98',
    'src/third_party/WebKit':
        Var('webkit_url') + '' + Var('webkit_rev'),
    'src/third_party/WebKit/LayoutTests/w3c/csswg-test':
        Var('git_url') + '/external/w3c/csswg-test.git@bacbb4a8dca702cd86646761fde96793db13d4f1',
    'src/third_party/WebKit/LayoutTests/w3c/web-platform-tests':
        Var('git_url') + '/external/w3c/web-platform-tests.git@6bed4516fe8522d65512c76ef02e4f0ae8234395',
    'src/third_party/angle':
        Var('git_url') + '/angle/angle.git' + '@' + Var('angle_revision'),
    'src/third_party/bidichecker':
        Var('git_url') + '/external/bidichecker/lib.git@97f2aa645b74c28c57eca56992235c79850fa9e0',
    'src/third_party/brotli/src':
        Var('git_url') + '/external/font-compression-reference.git@0829e37293abc2523a1d2b0f4d68ff7b5fcd8e01',
    'src/third_party/cacheinvalidation/src':
        Var('git_url') + '/external/google-cache-invalidation-api/src.git@6cd2fc3c3f3b3c95870be4696e642d4c3f051b59',
    'src/third_party/clang_format/script':
        Var('git_url') + '/chromium/llvm-project/cfe/tools/clang-format.git@385fc3379dc95b67d601b4384b16b1ec0bf12361',
    'src/third_party/cld_2/src':
        Var('git_url') + '/external/cld2.git@3fced387543ba9bed402923b3c6feb459fb61f58',
    'src/third_party/ffmpeg':
        Var('git_url') + '/chromium/third_party/ffmpeg.git' + Var('ffmpeg_hash'),
    'src/third_party/flac':
        Var('git_url') + '/chromium/deps/flac.git@71e33f190a7bb144fe4e2014897b8d15c8247198',
    'src/third_party/hunspell':
        Var('git_url') + '/chromium/deps/hunspell.git@d9ea3fbee04dac040e59ece751d4f308eb346625',
    'src/third_party/hunspell_dictionaries':
        Var('git_url') + '/chromium/deps/hunspell_dictionaries.git@4560bdd463a3500e2334e85c8a0e9e5d5d6774e7',
    'src/third_party/icu':
        Var('git_url') + '/chromium/deps/icu46.git@c25f7de14670091b1b7dfeb7af4d04050cbbb1d8',
    'src/third_party/jsoncpp/source/include':
        Var('git_url') + '/external/jsoncpp/jsoncpp/include.git@b0dd48e02b6e6248328db78a65b5c601f150c349',
    'src/third_party/jsoncpp/source/src/lib_json':
        Var('git_url') + '/external/jsoncpp/jsoncpp/src/lib_json.git@a8caa51ba2f80971a45880425bf2ae864a786784',
    'src/third_party/leveldatabase/src':
        Var('git_url') + '/external/leveldb.git@e9c65d24cda587bd317127f104bd0d52e8eea952',
    'src/third_party/libaddressinput/src':
        Var('git_url') + '/external/libaddressinput.git@3f7d76be9f572d8fdf512f4e2085109bc32a6128',
    'src/third_party/libc++/trunk':
        Var('git_url') + '/chromium/llvm-project/libcxx.git@e785ef19637f88c5e3e9926fabd8a64cd7eac49d',
    'src/third_party/libc++abi/trunk':
        Var('git_url') + '/chromium/llvm-project/libcxxabi.git@062ba40d41870a04e0aefb64f8122e91aa824147',
    'src/third_party/libexif/sources':
        Var('git_url') + '/chromium/deps/libexif/sources.git@ed98343daabd7b4497f97fda972e132e6877c48a',
    'src/third_party/libjingle/source/talk':
        Var('git_url') + '/external/webrtc/trunk/talk.git@dd0accf3b191dfe0d7fef84aab99d60ff7e3b8e0',
    'src/third_party/libjpeg_turbo':
        Var('git_url') + '/chromium/deps/libjpeg_turbo.git@3395bcc26e390d2960d15020d4a4d27ae0c122fe',
    'src/third_party/libphonenumber/src/phonenumbers':
        Var('git_url') + '/external/libphonenumber/cpp/src/phonenumbers.git@8d8b5b3b2035197795d27573d4cf566b5d9ad689',
    'src/third_party/libphonenumber/src/resources':
        Var('git_url') + '/external/libphonenumber/resources.git@de095548d2ae828a414e01f3951bfefba902b4e4',
    'src/third_party/libphonenumber/src/test':
        Var('git_url') + '/external/libphonenumber/cpp/test.git@883b7b86541d64b2691f7c0e65facb0b08db73e8',
    'src/third_party/libsrtp':
        Var('git_url') + '/chromium/deps/libsrtp.git@2f2e557b809dc1dd7977098ad354a540f04beb4e',
    'src/third_party/libvpx':
        Var('git_url') + '/chromium/deps/libvpx.git@497a01b086cc703ed01af8e8aeed3e5733ad8315',
    'src/third_party/libwebm/source':
        Var('git_url') + '/webm/libwebm.git@fb6b6e64444c637f27d103fd113e0c7bf4f107dd',
    'src/third_party/libyuv':
        Var('git_url') + '/external/libyuv.git@05c4c715090dd1ffdd3b9bbc52cc078e6398ac3a',
    'src/third_party/mesa/src':
        Var('git_url') + '/chromium/deps/mesa.git@457812d99a213dedf1c4cd38018ff48118d0c44f',
    'src/third_party/openmax_dl':
        Var('git_url') + '/external/webrtc/deps/third_party/openmax.git@0349a5549a2ad49d03bef9742a77f62f72ece1ed',
    'src/third_party/openssl':
        Var('git_url') + '/chromium/deps/openssl.git@eebc9e92e7c32760570bfcb4f55eb1130c967aeb',
    'src/third_party/opus/src':
        Var('git_url') + '/chromium/deps/opus.git@36fa2621472ebf5b859fd16bbdb749019c68cc69',
    'src/third_party/ots':
        Var('git_url') + '/external/ots.git@011a74db66c39c0d8cb6cb2fb6a62c38dd0e1fe0',
    'src/third_party/pyftpdlib/src':
        Var('git_url') + '/external/pyftpdlib.git@2be6d65e31c7ee6320d059f581f05ae8d89d7e45',
    'src/third_party/pywebsocket/src':
        Var('git_url') + '/external/pywebsocket/src.git@cb349e87ddb30ff8d1fa1a89be39cec901f4a29c',
    'src/third_party/safe_browsing/testing':
        Var('git_url') + '/external/google-safe-browsing/testing.git@9d7e8064f3ca2e45891470c9b5b1dce54af6a9d6',
    'src/third_party/scons-2.0.1':
        Var('git_url') + '/native_client/src/third_party/scons-2.0.1.git@1c1550e17fc26355d08627fbdec13d8291227067',
    'src/third_party/sfntly/cpp/src':
        Var('git_url') + '/external/sfntly/cpp/src.git@8f090032dd4f8f8908f338cc73bb840b788377f2',
    'src/third_party/skia/gyp':
        Var('git_url') + '/external/skia/gyp.git@f187160f1c51a308d9e4007aa4237f88df6813e5',
    'src/third_party/skia/include':
        Var('git_url') + '/external/skia/include.git@550afca67115aabc4a1b47152fb628912eaaa611',
    'src/third_party/skia/src':
        Var('git_url') + '/external/skia/src.git@88c3a5dce6bb39d47437fdbe853318ea28e0cd13',
    'src/third_party/smhasher/src':
        Var('git_url') + '/external/smhasher.git@e87738e57558e0ec472b2fc3a643b838e5b6e88f',
    'src/third_party/snappy/src':
        Var('git_url') + '/external/snappy.git@762bb32f0c9d2f31ba4958c7c0933d22e80c20bf',
    'src/third_party/speex':
        Var('git_url') + '/chromium/deps/speex.git@f448dfcceac99e0a771feaeedf447523b3fd26e1',
    'src/third_party/swig/Lib':
        Var('git_url') + '/chromium/deps/swig/Lib.git@f2a695d52e61e6a8d967731434f165ed400f0d69',
    'src/third_party/trace-viewer':
        Var('git_url') + '/external/trace-viewer.git@2cdaa9933db2f6475f96703082b99b5e71d091af',
    'src/third_party/usrsctp/usrsctplib':
        Var('git_url') + '/external/usrsctplib.git@368d86efa422ae7e549399f8c35783c0e80232f0',
    'src/third_party/webdriver/pylib':
        Var('git_url') + '/external/selenium/py.git@8212c8017c92a1ba740caf01c1acefb3674a6a44',
    'src/third_party/webgl/src':
        Var('git_url') + '/external/khronosgroup/webgl.git@8f445334c2f13a6be762fbdc90c4d80397d31788',
    'src/third_party/webpagereplay':
        Var('git_url') + '/external/web-page-replay.git@1cf80576c1c4beb6185af0ac70eb7379c5e8262b',
    'src/third_party/webrtc':
        Var('git_url') + '/external/webrtc/trunk/webrtc.git@1d95c5aecd0a4924f39f24834fb06d06e61f181e',
    'src/third_party/yasm/source/patched-yasm':
        Var('git_url') + '/chromium/deps/yasm/patched-yasm.git@c960eb11ccda80b10ed50be39df4f0663b371d1d',
    'src/tools/deps2git':
        Var('git_url') + '/chromium/tools/deps2git.git@f3ab61817e0c29800c6a5773eade3fc0d904d627',
    'src/tools/grit':
        Var('git_url') + '/external/grit-i18n.git@1370f19146300b010e054e20bd733e183ba6f30e',
    'src/tools/gyp':
        Var('git_url') + '/external/gyp.git@9a184eea4849278fd557627adcf48cb8e2ff9f67',
    'src/tools/page_cycler/acid3':
        Var('git_url') + '/chromium/deps/acid3.git@6be0a66a1ebd7ebc5abc1b2f405a945f6d871521',
    'src/tools/swarming_client':
        Var('git_url') + '/external/swarming.client.git@4eeada947e2fa4f48100ebb39b740bccabbc7747',
    'src/v8':
        Var('git_url') + '/external/v8.git@f2f0489407bbb5e50d16ae791442df29513b53b5',
}

deps_os = {
    'android':
    {
        'src/third_party/android_tools':
            Var('git_url') + '/android_tools.git@c9390198d02bf6f52b9a46b519badaf1c565261a',
        'src/third_party/aosp':
            Var('git_url') + '/chromium/deps/aosp.git@bbafe5155dff86bbba1e92b42a073ffcfcfbf28c',
        'src/third_party/apache-mime4j':
            Var('git_url') + '/chromium/deps/apache-mime4j.git@28cb1108bff4b6cf0a2e86ff58b3d025934ebe3a',
        'src/third_party/eyesfree/src/android/java/src/com/googlecode/eyesfree/braille':
            Var('git_url') + '/external/eyes-free/braille/client/src/com/googlecode/eyesfree/braille.git@77bf6edb0138e3a38a2772248696f130dab45e34',
        'src/third_party/findbugs':
            Var('git_url') + '/chromium/deps/findbugs.git@7f69fa78a6db6dc31866d09572a0e356e921bf12',
        'src/third_party/freetype':
            Var('git_url') + '/chromium/src/third_party/freetype.git@a2b9955b49034a51dfbc8bf9f4e9d312149cecac',
        'src/third_party/guava/src':
            Var('git_url') + '/external/guava-libraries.git@c523556ab7d0f05afadebd20e7768d4c16af8771',
        'src/third_party/httpcomponents-client':
            Var('git_url') + '/chromium/deps/httpcomponents-client.git@285c4dafc5de0e853fa845dce5773e223219601c',
        'src/third_party/httpcomponents-core':
            Var('git_url') + '/chromium/deps/httpcomponents-core.git@9f7180a96f8fa5cab23f793c14b413356d419e62',
        'src/third_party/jarjar':
            Var('git_url') + '/chromium/deps/jarjar.git@2e1ead4c68c450e0b77fe49e3f9137842b8b6920',
        'src/third_party/jsr-305/src':
            Var('git_url') + '/external/jsr-305.git@642c508235471f7220af6d5df2d3210e3bfc0919',
        'src/third_party/libaddressinput/src/cpp':
            None,
        'src/third_party/libaddressinput/src/testdata':
            None,
        'src/third_party/lss':
            Var('git_url') + '/external/linux-syscall-support/lss.git@2f724fced658cd6182096c615efdf3767b7c57fe',
    },
    'ios':
    {
        'src/build/util/support':
            None,
        'src/chrome/test/data/extensions/api_test/permissions/nacl_enabled/bin':
            None,
        'src/chrome/test/data/perf/canvas_bench':
            None,
        'src/chrome/test/data/perf/frame_rate/content':
            None,
        'src/chrome/test/data/perf/third_party/octane':
            None,
        'src/media/cdm/ppapi/api':
            None,
        'src/native_client':
            None,
        'src/native_client/src/third_party/ppapi':
            None,
        'src/testing/iossim/third_party/class-dump':
            Var('git_url') + '/chromium/deps/class-dump.git@89bd40883c767584240b4dade8b74e6f57b9bdab',
        'src/third_party/WebKit/LayoutTests/w3c/csswg-test':
            None,
        'src/third_party/WebKit/LayoutTests/w3c/web-platform-tests':
            None,
        'src/third_party/angle':
            None,
        'src/third_party/bidichecker':
            None,
        'src/third_party/brotli/src':
            None,
        'src/third_party/cld_2/src':
            None,
        'src/third_party/ffmpeg':
            None,
        'src/third_party/google_toolbox_for_mac/src':
            Var('git_url') + '/external/google-toolbox-for-mac.git@704fb56df6a9a0884801045a158e021945d9d991',
        'src/third_party/hunspell':
            None,
        'src/third_party/hunspell_dictionaries':
            None,
        'src/third_party/libaddressinput/src/cpp':
            None,
        'src/third_party/libaddressinput/src/testdata':
            None,
        'src/third_party/libc++/trunk':
            None,
        'src/third_party/libc++abi/trunk':
            None,
        'src/third_party/libexif/sources':
            None,
        'src/third_party/libjpeg_turbo':
            None,
        'src/third_party/libsrtp':
            None,
        'src/third_party/libvpx':
            None,
        'src/third_party/libyuv':
            None,
        'src/third_party/mesa/src':
            None,
        'src/third_party/nss':
            Var('git_url') + '/chromium/deps/nss.git@8d13ffbb72567dff999d40f52415d7aafa8ab5f2',
        'src/third_party/openmax_dl':
            None,
        'src/third_party/opus/src':
            None,
        'src/third_party/ots':
            None,
        'src/third_party/pymox/src':
            None,
        'src/third_party/safe_browsing/testing':
            None,
        'src/third_party/scons-2.0.1':
            None,
        'src/third_party/sfntly/cpp/src':
            None,
        'src/third_party/speex':
            None,
        'src/third_party/swig/Lib':
            None,
        'src/third_party/usrsctp/usrsctplib':
            None,
        'src/third_party/v8-i18n':
            None,
        'src/third_party/webdriver/pylib':
            None,
        'src/third_party/webgl':
            None,
        'src/third_party/webpagereplay':
            None,
        'src/third_party/webrtc':
            None,
        'src/third_party/yasm/source/patched-yasm':
            None,
        'src/tools/page_cycler/acid3':
            None,
        'src/v8':
            None,
    },
    'mac':
    {
        'src/chrome/installer/mac/third_party/xz/xz':
            Var('git_url') + '/chromium/deps/xz.git@eecaf55632ca72e90eb2641376bce7cdbc7284f7',
        'src/chrome/tools/test/reference_build/chrome_mac':
            Var('git_url') + '/chromium/reference_builds/chrome_mac.git@78cf441c4ed0727b7bdadd63818e529898c3e4dd',
        'src/third_party/google_toolbox_for_mac/src':
            Var('git_url') + '/external/google-toolbox-for-mac.git@704fb56df6a9a0884801045a158e021945d9d991',
        'src/third_party/lighttpd':
            Var('git_url') + '/chromium/deps/lighttpd.git@9dfa55d15937a688a92cbf2b7a8621b0927d06eb',
        'src/third_party/nss':
            Var('git_url') + '/chromium/deps/nss.git@8d13ffbb72567dff999d40f52415d7aafa8ab5f2',
        'src/third_party/pdfsqueeze':
            Var('git_url') + '/external/pdfsqueeze.git@5936b871e6a087b7e50d4cbcb122378d8a07499f',
        'src/third_party/swig/mac':
            Var('git_url') + '/chromium/deps/swig/mac.git@1b182eef16df2b506f1d710b34df65d55c1ac44e',
    },
    'unix':
    {
        'src/chrome/tools/test/reference_build/chrome_linux':
            Var('git_url') + '/chromium/reference_builds/chrome_linux64.git@5186d1b279358de0d9a581399281f2268932cd37',
        'src/third_party/chromite':
            Var('git_url') + '/chromiumos/chromite.git@aaa614c9521c705071737f840f68d1262036bebe',
        'src/third_party/cros_system_api':
            Var('git_url') + '/chromiumos/platform/system_api.git@916c5d850ca4424b1de79e9e1054f34a23ee2e33',
        'src/third_party/fontconfig/src':
            Var('git_url') + '/external/fontconfig.git@f16c3118e25546c1b749f9823c51827a60aeb5c1',
        'src/third_party/freetype2/src':
            Var('git_url') + '/chromium/src/third_party/freetype2.git@d699c2994ecc178c4ed05ac2086061b2034c2178',
        'src/third_party/liblouis/src':
            Var('git_url') + '/external/liblouis.git@3c2daee56250162e5a75830871601d74328d39f5',
        'src/third_party/lss':
            Var('git_url') + '/external/linux-syscall-support/lss.git@2f724fced658cd6182096c615efdf3767b7c57fe',
        'src/third_party/pyelftools':
            Var('git_url') + '/chromiumos/third_party/pyelftools.git@bdc1d380acd88d4bfaf47265008091483b0d614e',
        'src/third_party/swig/linux':
            Var('git_url') + '/chromium/deps/swig/linux.git@866b8e0e0e0cfe99ebe608260030916ca0c3f92d',
        'src/third_party/undoview':
            Var('git_url') + '/chromium/deps/undoview.git@3ba503e248f3cdbd81b78325a24ece0984637559',
        'src/third_party/xdg-utils':
            Var('git_url') + '/chromium/deps/xdg-utils.git@d80274d5869b17b8c9067a1022e4416ee7ed5e0d',
    },
    'win':
    {
        'src/chrome/tools/test/reference_build/chrome_win':
            Var('git_url') + '/chromium/reference_builds/chrome_win.git@126d11ec7462975e6f073214929fca0f3c54756e',
        'src/third_party/bison':
            Var('git_url') + '/chromium/deps/bison.git@083c9a45e4affdd5464ee2b224c2df649c6e26c3',
        'src/third_party/cygwin':
            Var('git_url') + '/chromium/deps/cygwin.git@c89e446b273697fadf3a10ff1007a97c0b7de6df',
        'src/third_party/gnu_binutils':
            Var('git_url') + '/native_client/deps/third_party/gnu_binutils.git@f4003433b61b25666565690caf3d7a7a1a4ec436',
        'src/third_party/gperf':
            Var('git_url') + '/chromium/deps/gperf.git@d892d79f64f9449770443fb06da49b5a1e5d33c1',
        'src/third_party/lighttpd':
            Var('git_url') + '/chromium/deps/lighttpd.git@9dfa55d15937a688a92cbf2b7a8621b0927d06eb',
        'src/third_party/mingw-w64/mingw/bin':
            Var('git_url') + '/native_client/deps/third_party/mingw-w64/mingw/bin.git@3cc8b140b883a9fe4986d12cfd46c16a093d3527',
        'src/third_party/nacl_sdk_binaries':
            Var('git_url') + '/chromium/deps/nacl_sdk_binaries.git@759dfca03bdc774da7ecbf974f6e2b84f43699a5',
        'src/third_party/nss':
            Var('git_url') + '/chromium/deps/nss.git@8d13ffbb72567dff999d40f52415d7aafa8ab5f2',
        'src/third_party/pefile':
            Var('git_url') + '/external/pefile.git@1ceaa279daa62b71e3431e58f68be6a96dd1519a',
        'src/third_party/perl':
            Var('git_url') + '/chromium/deps/perl.git@ac0d98b5cee6c024b0cffeb4f8f45b6fc5ccdb78',
        'src/third_party/psyco_win32':
            Var('git_url') + '/chromium/deps/psyco_win32.git@f5af9f6910ee5a8075bbaeed0591469f1661d868',
        'src/third_party/swig/win':
            Var('git_url') + '/chromium/deps/swig/win.git@986f013ba518541adf5c839811efb35630a31031',
        'src/third_party/syzygy/binaries':
            Var('git_url') + '/external/sawbuck/syzygy/binaries.git@7356c6c263ebb2ae60f7e958c86ab9f4a79862fd',
        'src/third_party/yasm/binaries':
            Var('git_url') + '/chromium/deps/yasm/binaries.git@52f9b3f4b0aa06da24ef8b123058bb61ee468881',
    },
}

include_rules = [
    '+base',
    '+build',
    '+ipc',
    '+library_loaders',
    '+testing',
    '+third_party/icu/source/common/unicode',
    '+third_party/icu/source/i18n/unicode',
    '+url'
]

skip_child_includes = [
    'breakpad',
    'delegate_execute',
    'metro_driver',
    'native_client_sdk',
    'o3d',
    'pdf',
    'sdch',
    'skia',
    'testing',
    'third_party',
    'v8',
    'win8'
]

hooks = [
    {
    'action':
         [
    'python',
    'src/build/download_nacl_toolchains.py',
    '--no-arm-trusted',
    '--keep'
],
    'pattern':
         '.',
    'name':
         'nacltools'
},
    {
    'action':
         [
    'python',
    'src/build/linux/install-arm-sysroot.py',
    '--linux-only'
],
    'pattern':
         '.',
    'name':
         'sysroot'
},
    {
    'action':
         [
    'python',
    'src/chrome/installer/linux/sysroot_scripts/install-debian.wheezy.sysroot.py',
    '--linux-only',
    '--arch=amd64'
],
    'pattern':
         '.',
    'name':
         'sysroot'
},
    {
    'action':
         [
    'python',
    'src/chrome/installer/linux/sysroot_scripts/install-debian.wheezy.sysroot.py',
    '--linux-only',
    '--arch=i386'
],
    'pattern':
         '.',
    'name':
         'sysroot'
},
    {
    'action':
         [
    'python',
    'src/tools/clang/scripts/update.py',
    '--if-needed'
],
    'pattern':
         '.',
    'name':
         'clang'
},
    {
    'action':
         [
    'python',
    'src/build/vs_toolchain.py',
    'update'
],
    'pattern':
         '.',
    'name':
         'win_toolchain'
},
    {
    'action':
         [
    'python',
    'src/build/util/lastchange.py',
    '-o',
    'src/build/util/LASTCHANGE'
],
    'pattern':
         '.',
    'name':
         'lastchange'
},
    {
    'action':
         [
    'python',
    'src/build/util/lastchange.py',
    '-s',
    'src/third_party/WebKit',
    '-o',
    'src/build/util/LASTCHANGE.blink'
],
    'pattern':
         '.',
    'name':
         'lastchange'
},
    {
    'action':
         [
    'download_from_google_storage',
    '--no_resume',
    '--platform=win32',
    '--no_auth',
    '--bucket',
    'chromium-gn',
    '-s',
    'src/tools/gn/bin/win/gn.exe.sha1'
],
    'pattern':
         '.',
    'name':
         'gn_win'
},
    {
    'action':
         [
    'download_from_google_storage',
    '--no_resume',
    '--platform=darwin',
    '--no_auth',
    '--bucket',
    'chromium-gn',
    '-s',
    'src/tools/gn/bin/mac/gn.sha1'
],
    'pattern':
         '.',
    'name':
         'gn_mac'
},
    {
    'action':
         [
    'download_from_google_storage',
    '--no_resume',
    '--platform=linux*',
    '--no_auth',
    '--bucket',
    'chromium-gn',
    '-s',
    'src/tools/gn/bin/linux/gn.sha1'
],
    'pattern':
         '.',
    'name':
         'gn_linux'
},
    {
    'action':
         [
    'download_from_google_storage',
    '--no_resume',
    '--platform=linux*',
    '--no_auth',
    '--bucket',
    'chromium-gn',
    '-s',
    'src/tools/gn/bin/linux/gn32.sha1'
],
    'pattern':
         '.',
    'name':
         'gn_linux32'
},
    {
    'action':
         [
    'download_from_google_storage',
    '--no_resume',
    '--platform=win32',
    '--no_auth',
    '--bucket',
    'chromium-clang-format',
    '-s',
    'src/third_party/clang_format/bin/win/clang-format.exe.sha1'
],
    'pattern':
         '.',
    'name':
         'clang_format_win'
},
    {
    'action':
         [
    'download_from_google_storage',
    '--no_resume',
    '--platform=darwin',
    '--no_auth',
    '--bucket',
    'chromium-clang-format',
    '-s',
    'src/third_party/clang_format/bin/mac/clang-format.sha1'
],
    'pattern':
         '.',
    'name':
         'clang_format_mac'
},
    {
    'action':
         [
    'download_from_google_storage',
    '--no_resume',
    '--platform=linux*',
    '--no_auth',
    '--bucket',
    'chromium-clang-format',
    '-s',
    'src/third_party/clang_format/bin/linux/clang-format.sha1'
],
    'pattern':
         '.',
    'name':
         'clang_format_linux'
},
    {
    'action':
         [
    'python',
    'src/third_party/binutils/download.py'
],
    'pattern':
         'src/third_party/binutils',
    'name':
         'binutils'
},
    {
    'action':
         [
    'download_from_google_storage',
    '--no_resume',
    '--platform=linux*',
    '--no_auth',
    '--bucket',
    'chromium-eu-strip',
    '-s',
    'src/build/linux/bin/eu-strip.sha1'
],
    'pattern':
         '.',
    'name':
         'eu-strip'
},
    {
    'action':
         [
    'python',
    'src/build/gyp_chromium'
],
    'pattern':
         '.',
    'name':
         'gyp'
}
]
