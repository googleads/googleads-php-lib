<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:wsdl="http://schemas.xmlsoap.org/wsdl/" xmlns:xsd="http://www.w3.org/2001/XMLSchema"
  xmlns:php="http://php.net/xsl" xmlns:exslt="http://exslt.org/common">
  <xsl:template
    match="/*[local-name()='definitions' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']">
    <wsdl2php>
      <services>
        <xsl:for-each
          select="*[local-name()='service' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']">
          <service name="{@name}">
            <xsl:attribute name="endpoint">
              <xsl:value-of select="*[local-name()='port' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']/*[local-name()='address' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/soap/']/@location" />
            </xsl:attribute>
            <functions>
              <xsl:for-each
                select="*[local-name()='port' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']">
                <xsl:for-each
                  select="//*[local-name()='binding' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/' and
                                        (@name=substring-after(current()/@binding,':') or
                                        @name=current()/@binding)]">
                  <xsl:for-each
                    select="//*[local-name()='portType' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/' and
                                            (@name=substring-after(current()/@type,':') or
                                            @name=current()/@type)]//
                                            *[local-name()='operation' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']">
                    <function name="{@name}">
                      <xsl:if
                        test="//*[local-name()='message' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/' and
                             ((@name=current()/*[local-name()='input' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']/@name) or
                              (@name=current()/*[local-name()='input' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']/@message) or
                               @name=substring-after(current()/*[local-name()='input' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']/@message,':'))]">
                        <parameters>
                          <xsl:apply-templates
                            select="//*[local-name()='message' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/' and
                                        ((@name=current()/*[local-name()='input' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']/@name) or
                                                    (@name=current()/*[local-name()='input' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']/@message) or
                                                    @name=substring-after(current()/*[local-name()='input' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']/@message,':'))]" />
                        </parameters>
                      </xsl:if>
                      <xsl:if
                        test="//*[local-name()='message' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/' and
                                                    ((@name=current()/*[local-name()='output' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']/@name) or
                                                    (@name=current()/*[local-name()='output' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']/@message) or
                                                    @name=substring-after(current()/*[local-name()='output' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']/@message,':'))]">
                        <returns>
                          <xsl:apply-templates
                            select="//*[local-name()='message' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/' and
                                        ((@name=current()/*[local-name()='output' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']/@name) or
                                                    (@name=current()/*[local-name()='output' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']/@message) or
                                                    @name=substring-after(current()/*[local-name()='output' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']/@message,':'))]" />
                        </returns>
                      </xsl:if>
                      <xsl:if
                        test="//*[local-name()='message' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/' and
                                                    ((@name=current()/*[local-name()='fault' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']/@name) or
                                                    (@name=current()/*[local-name()='fault' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']/@message) or
                                                    @name=substring-after(current()/*[local-name()='fault' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']/@message,':'))]">
                        <exceptions>
                          <xsl:apply-templates
                            select="//*[local-name()='message' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/' and
                                         ((@name=current()/*[local-name()='fault' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']/@name) or
                                                    (@name=current()/*[local-name()='fault' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']/@message) or
                                                    @name=substring-after(current()/*[local-name()='fault' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']/@message,':'))]" />
                        </exceptions>
                      </xsl:if>
                    </function>
                  </xsl:for-each>
                </xsl:for-each>
              </xsl:for-each>
            </functions>
          </service>
        </xsl:for-each>
      </services>
      <classes>
        <xsl:for-each
          select="*[local-name()='types' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']
                    //*[(local-name()='complexType' or local-name()='simpleType') and
                        not(starts-with(@name, 'ArrayOf'))]">
          <class name="{@name | ../@name}" xsiTypeName="{@name}">
          <documentation>
            <xsl:if test=".//*[local-name()='annotation'] | ..//*[local-name()='annotation']">
              <xsl:value-of select=".//*[local-name()='annotation']"/>
            </xsl:if>
            <xsl:if test="..//*[local-name()='annotation']">
              <xsl:value-of select="..//*[local-name()='annotation']"/>
            </xsl:if>
          </documentation>
            <xsl:if test=".//*[local-name()='extension']">
              <extends>
                <xsl:choose>
                  <xsl:when test="contains(.//*[local-name()='extension']/@base,':')">
                    <xsl:value-of
                      select="substring-after(.//*[local-name()='extension']/@base,':')" />
                  </xsl:when>
                  <xsl:otherwise>
                    <xsl:value-of select=".//*[local-name()='extension']/@base" />
                  </xsl:otherwise>
                </xsl:choose>
              </extends>
            </xsl:if>
            <xsl:if test=".//*[local-name()='element']">
              <properties>
                <xsl:apply-templates select=".//*[local-name()='element']" />
              </properties>
            </xsl:if>
          </class>
        </xsl:for-each>
      </classes>
    </wsdl2php>
  </xsl:template>

  <xsl:template
    match="*[local-name()='message' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']">
    <xsl:for-each select="*[local-name()='part' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']">
      <xsl:choose>
        <xsl:when test="@element">
          <xsl:call-template name="messagePart">
            <xsl:with-param name="refnode" select="current()" />
            <xsl:with-param name="name" select="@name" />
            <xsl:with-param name="type" select="@element" />
          </xsl:call-template>
        </xsl:when>
        <xsl:when test="@type">
          <xsl:call-template name="messagePart">
            <xsl:with-param name="refnode" select="current()" />
            <xsl:with-param name="name" select="@name" />
            <xsl:with-param name="type" select="@type" />
          </xsl:call-template>
        </xsl:when>
        <xsl:otherwise>
          <xsl:call-template name="messagePart">
            <xsl:with-param name="refnode" select="current()" />
            <xsl:with-param name="name" select="@name" />
          </xsl:call-template>
        </xsl:otherwise>

      </xsl:choose>
    </xsl:for-each>
  </xsl:template>

  <xsl:template
    match="*[local-name()='element' and namespace-uri()='http://www.w3.org/2001/XMLSchema']">
    <xsl:choose>
      <xsl:when test="@ref and @name">
        <xsl:call-template name="messagePart">
          <xsl:with-param name="refnode" select="current()" />
          <xsl:with-param name="name" select="@name" />
          <xsl:with-param name="type" select="@ref" />
        </xsl:call-template>
      </xsl:when>
      <xsl:when test="@ref and contains(@ref,':')">
        <xsl:call-template name="messagePart">
          <xsl:with-param name="refnode" select="current()" />
          <xsl:with-param name="name" select="substring-after(@ref,':')" />
          <xsl:with-param name="type" select="@ref" />
        </xsl:call-template>
      </xsl:when>
      <xsl:when test="@ref">
        <xsl:call-template name="messagePart">
          <xsl:with-param name="refnode" select="current()" />
          <xsl:with-param name="name" select="@ref" />
          <xsl:with-param name="type" select="@ref" />
        </xsl:call-template>
      </xsl:when>
      <xsl:when test="@type">
        <xsl:call-template name="messagePart">
          <xsl:with-param name="refnode" select="current()" />
          <xsl:with-param name="name" select="@name" />
          <xsl:with-param name="type" select="@type" />
        </xsl:call-template>
      </xsl:when>
      <xsl:otherwise>
        <xsl:call-template name="messagePart">
          <xsl:with-param name="refnode" select="current()" />
          <xsl:with-param name="name" select="@name" />
        </xsl:call-template>
      </xsl:otherwise>
    </xsl:choose>
  </xsl:template>

  <xsl:template name="messagePart">
    <xsl:param name="refnode" />
    <xsl:param name="name" />
    <xsl:param name="type" />
    <xsl:choose>
      <xsl:when test="string-length($type)=0">
        <xsl:choose>
          <xsl:when test="$refnode[@maxOccurs='unbounded']">
            <entry debug="1" name="{$name}" type="anyType[]"
              error="no type or element in message" />
          </xsl:when>
          <xsl:otherwise>
            <entry debug="1" name="{$name}" type="anyType"
              error="no type or element in message" />
          </xsl:otherwise>
        </xsl:choose>
      </xsl:when>
      <xsl:when
        test="(substring-before($type,':')='xsd') or (substring-before($type,':')='xs')">
        <xsl:choose>
          <xsl:when test="$refnode[@maxOccurs='unbounded']">
            <entry debug="2" name="{$name}" type="{substring-after($type,':')}[]" />
          </xsl:when>
          <xsl:otherwise>
            <entry debug="2" name="{$name}" type="{substring-after($type,':')}" />
          </xsl:otherwise>
        </xsl:choose>
      </xsl:when>
      <xsl:when
        test="//*[local-name()='schema' and namespace-uri()='http://www.w3.org/2001/XMLSchema']
                        /*[local-name()='element' and namespace-uri()='http://www.w3.org/2001/XMLSchema'
                        and (@name=substring-after($type,':') or @name=$type)]">
        <xsl:variable name="matchedNode"
          select="//*[local-name()='schema' and namespace-uri()='http://www.w3.org/2001/XMLSchema']
                        /*[local-name()='element' and namespace-uri()='http://www.w3.org/2001/XMLSchema'
                        and (@name=substring-after($type,':') or @name=$type)]" />
        <xsl:choose>
          <xsl:when test="$matchedNode/@type">
            <xsl:choose>
              <xsl:when test="contains($matchedNode/@type,':')">
                <xsl:choose>
                  <xsl:when test="$refnode[@maxOccurs='unbounded']">
                    <entry debug="3" name="{$name}"
                      type="{substring-after($matchedNode/@type,':')}[]" />
                  </xsl:when>
                  <xsl:otherwise>
                    <entry debug="3" name="{$name}"
                      type="{substring-after($matchedNode/@type,':')}" />
                  </xsl:otherwise>
                </xsl:choose>
              </xsl:when>
              <xsl:otherwise>
                <xsl:choose>
                  <xsl:when test="$refnode[@maxOccurs='unbounded']">
                    <entry debug="3b" name="{$name}" type="{$matchedNode/@type}[]" />
                  </xsl:when>
                  <xsl:otherwise>
                    <entry debug="3b" name="{$name}" type="{$matchedNode/@type}" />
                  </xsl:otherwise>
                </xsl:choose>
              </xsl:otherwise>
            </xsl:choose>
          </xsl:when>
          <xsl:when test="$matchedNode/@name">
            <xsl:choose>
              <xsl:when test="$refnode[@maxOccurs='unbounded']">
                <entry debug="3c" name="{$name}" type="{$matchedNode/@name}[]" />
              </xsl:when>
              <xsl:otherwise>
                <entry debug="3c" name="{$name}" type="{$matchedNode/@name}" />
              </xsl:otherwise>
            </xsl:choose>
          </xsl:when>
          <xsl:otherwise>
            <xsl:choose>
              <xsl:when test="$refnode[@maxOccurs='unbounded']">
                <entry debug="3d" name="{$name}" type="{$name}[]"
                  error="bad element type def" />
              </xsl:when>
              <xsl:otherwise>
                <entry debug="3d" name="{$name}" type="{$name}"
                  error="bad element type def" />
              </xsl:otherwise>
            </xsl:choose>
          </xsl:otherwise>
        </xsl:choose>
      </xsl:when>
      <xsl:when
        test="//*[local-name()='schema' and namespace-uri()='http://www.w3.org/2001/XMLSchema']
                        /*[local-name()='complexType' and namespace-uri()='http://www.w3.org/2001/XMLSchema'
                        and (@name=substring-after($type,':') or @name=$type)]//*[@ref='soapenc:arrayType']">
        <xsl:variable name="typeref"
          select="//*[local-name()='schema' and
                        namespace-uri()='http://www.w3.org/2001/XMLSchema']
                        /*[local-name()='complexType' and namespace-uri()='http://www.w3.org/2001/XMLSchema'
                        and (@name=substring-after($type,':') or @name=$type)]//*[@ref='soapenc:arrayType']
                        /@*[local-name()='arrayType']" />
        <xsl:choose>
          <xsl:when test="contains($typeref,':')">
            <entry debug="4" name="{$name}" type="{substring-after($typeref,':')}" />
          </xsl:when>
          <xsl:otherwise>
            <entry debug="4b" name="{$name}" type="{$typeref}" />
          </xsl:otherwise>
        </xsl:choose>
      </xsl:when>
      <xsl:when
        test="//*[local-name()='schema' and namespace-uri()='http://www.w3.org/2001/XMLSchema']
                        /*[local-name()='complexType' and namespace-uri()='http://www.w3.org/2001/XMLSchema'
                        and @name=substring-after($type,':')]">
        <xsl:variable name="typeref"
          select="//*[local-name()='schema' and
                        namespace-uri()='http://www.w3.org/2001/XMLSchema']
                        /*[local-name()='complexType' and namespace-uri()='http://www.w3.org/2001/XMLSchema'
                        and (@name=substring-after($type,':') or @name=$type)]/@name" />
        <xsl:choose>
          <xsl:when test="contains($typeref,':')">
            <xsl:choose>
              <xsl:when test="$refnode[@maxOccurs='unbounded']">
                <entry debug="5" name="{$name}" type="{substring-after($typeref,':')}[]" />
              </xsl:when>
              <xsl:otherwise>
                <entry debug="5" name="{$name}" type="{substring-after($typeref,':')}" />
              </xsl:otherwise>
            </xsl:choose>
          </xsl:when>
          <xsl:otherwise>
            <xsl:choose>
              <xsl:when test="$refnode[@maxOccurs='unbounded']">
                <entry debug="5b" name="{$name}" type="{$typeref}[]" />
              </xsl:when>
              <xsl:otherwise>
                <entry debug="5b" name="{$name}" type="{$typeref}" />
              </xsl:otherwise>
            </xsl:choose>
          </xsl:otherwise>
        </xsl:choose>
      </xsl:when>
      <xsl:otherwise>
        <xsl:choose>
          <xsl:when test="$refnode[@maxOccurs='unbounded']">
            <entry debug="6" name="{$name}" type="{$type}[]" error="uninterpreted"
              fname="{name($refnode)}" lname="{local-name($refnode)}" uri="{namespace-uri($refnode)}" />
          </xsl:when>
          <xsl:otherwise>
            <entry debug="6" name="{$name}" type="{$type}" error="uninterpreted"
              fname="{name($refnode)}" lname="{local-name($refnode)}" uri="{namespace-uri($refnode)}" />
          </xsl:otherwise>
        </xsl:choose>
      </xsl:otherwise>
    </xsl:choose>
  </xsl:template>
</xsl:stylesheet>
